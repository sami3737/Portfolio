/** Bouton "Retour en haut"
 * Cette section gère le bouton "Retour en haut" qui apparaît lorsque l'utilisateur fait défiler la page.
 */
const backToTopButton = document.getElementById('back-to-top');
const header = document.querySelector('header');
let currentSection; // Section actuellement affichée

// Appliquer l'effet ligne par ligne au contenu initial au chargement de la page
window.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.container');
    if (container) {
        loadSection('profil'); // Charger la section initiale
    }
});

if (backToTopButton) {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    // Ajoute un événement de clic pour faire défiler la page vers le haut de manière fluide
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Initialise l'état du bouton au chargement
    window.dispatchEvent(new Event('scroll'));
}

/** Indicateur de défilement vers le bas */
const scrollDownIndicator = document.querySelector('.bottom');

if (scrollDownIndicator) {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) {
            scrollDownIndicator.classList.remove('visible');
        } else {
            scrollDownIndicator.classList.add('visible');
        }
    });
}

// Navigation avec pilule animée
const navLinks = document.querySelectorAll('.nav a');
const pill = document.querySelector('.nav-pill');

function movePill(link) {
    if (!link || !pill) return;
    const ul = document.querySelector('.nav ul');
    const ulRect = ul.getBoundingClientRect();
    const linkRect = link.getBoundingClientRect();

    pill.style.left  = (linkRect.left - ulRect.left) + 'px';
    pill.style.width = linkRect.width + 'px';
}

navLinks.forEach(link => {
    // Chargement de la section correspondante
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const sectionId = this.getAttribute('data-section');
        loadSection(sectionId);
        
        // Retirer la classe active de tous les liens
        navLinks.forEach(l => {
            l.classList.remove('active');
            l.style.color = '';
        });
        
        // Ajouter la classe active au lien cliqué
        this.classList.add('active');
        this.style.color = 'white';
        
        // Déplacer la pilule
        movePill(this);
    });
    

    // Déplace la pilule au survol
    link.addEventListener('mouseenter', () => movePill(link));
});

navLinks.forEach(link => {
    link.addEventListener('mouseenter', () => {
        navLinks.forEach(l => l.style.color = '');
        link.style.color = 'white';
        movePill(link);
    });
    movePill(document.querySelector('.nav a.active'));
});

// Reset la position de la pilule lorsque la souris quitte la zone de navigation
document.querySelector('.nav ul').addEventListener('mouseleave', () => {
    navLinks.forEach(l => l.style.color = '');
    const active = document.querySelector('.nav a.active');
    if (active) active.style.color = 'white';
    movePill(active);
});

/** Card Flip Effect
 * Cette section gère l'effet de retournement des cartes de compétences. 
 * Lorsqu'une carte est cliquée, la classe "is-flipped" est ajoutée ou supprimée à l'élément interne de la carte, 
 * ce qui déclenche l'animation de retournement définie dans le CSS.
 */
function applyCardFlipEffect() {
    const card = document.querySelectorAll('.cardskill-card');

    card.forEach(function(cardElement) {
        cardElement.addEventListener('click', function() {
            this.querySelector('.card__inner').classList.toggle('is-flipped');
        });
    });
}

// Envoyer le formulaire de contact via AJAX
const contactForm = document.getElementById('contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(contactForm);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'send_email.php', true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('Message envoyé avec succès !');
                contactForm.reset();
            } else {
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        };

        xhr.send(formData);
    });
}

function loadSection(sectionId) {
    if (!sectionId) return;

    if (sectionId === currentSection) {
        // Si la section demandée est déjà affichée, ne rien faire
        return;
    }

    currentSection = sectionId; // Mettre à jour la section actuelle

    if(sectionId === 'contact') {
        // Si la section est "contact", faire défiler vers le bas
        const contactSection = document.getElementById('contact');
        if (contactSection) {
            contactSection.scrollIntoView({ behavior: 'smooth' });
        }
        return;
    }

    fetch(`./${sectionId}.php`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur HTTP : ' + response.status);
            }
            return response.text();
        })
        .then(data => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(data, 'text/html');
            const mainContent = doc.querySelector('main');
            if (mainContent) {
                const container = document.querySelector('.dynamicContent') || document.querySelector('.container');
                container.innerHTML = mainContent.innerHTML;
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                // Appliquer l'effet de flip aux cartes immédiatement après génération
                if (sectionId === 'profil') {
                    applyCardFlipEffect();
                }
                // Appliquer l'effet ligne par ligne
                applyLineByLineEffect(container);
            } else {
                throw new Error(`Aucune balise <main> trouvée dans ${sectionId}.php`);
            }
        })
        .catch(error => {
            console.error(`Erreur lors du chargement de la section ${sectionId} :`, error);
            const container = document.querySelector('.dynamicContent') || document.querySelector('.container');
            container.innerHTML = `<p>Impossible de charger la section ${sectionId} pour le moment.</p>`;
        });
}

// Fonction pour appliquer l'effet ligne par ligne
function applyLineByLineEffect(container) {
    const elements = container.querySelectorAll('*'); // Tous les éléments enfants

    elements.forEach((el, index) => {
        // Exclure les éléments des cartes de compétences pour éviter les conflits avec le flip
        if (el.classList.contains('cardskill-card') || el.closest('.cardskill-card')) {
            return;
        }        
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, index * 50); // Délai réduit à 50ms entre chaque élément
    });
}