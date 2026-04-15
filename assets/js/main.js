/** Bouton "Retour en haut"
 * Cette section gère le bouton "Retour en haut" qui apparaît lorsque l'utilisateur fait défiler la page.
 */
const backToTopButton = document.getElementById('back-to-top');

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
    // Navigation fluide
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const targetSection = document.getElementById(this.getAttribute('href').substring(1));
        if (targetSection) targetSection.scrollIntoView({ behavior: 'smooth' });
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
});

// Reset la position de la pilule lorsque la souris quitte la zone de navigation
document.querySelector('.nav ul').addEventListener('mouseleave', () => {
    navLinks.forEach(l => l.style.color = '');
    const active = document.querySelector('.nav a.active');
    if (active) active.style.color = 'white';
    movePill(active);
});


/** Cette fonction met à jour la classe active des liens de navigation en fonction de la section visible */
function updateActiveNavLink() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav a');
    const headerOffset = 80;

    let currentSectionId = '';
    // Parcourt chaque section pour déterminer laquelle est actuellement visible
    sections.forEach(section => {
        const sectionTop = section.offsetTop - headerOffset;
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            currentSectionId = section.getAttribute('id');
        }
    });

    // Si l'utilisateur est proche du bas de la page, forcer la sélection de la dernière section
    if(window.scrollY + window.innerHeight >= document.body.offsetHeight - 100) {
        currentSectionId = sections[sections.length - 1].getAttribute('id');
    }

    // Met à jour les classes des liens de navigation en fonction de la section visible
    navLinks.forEach(link => {
        link.classList.remove('active');
        link.style.color = '';
        if (link.getAttribute('href').substring(1) === currentSectionId) {
            link.classList.add('active');
            link.style.color = 'white';
        }
    });
    movePill(document.querySelector('.nav a.active'));
}

/** Ajoute un écouteur d'événement pour mettre à jour les liens de navigation lors du défilement */
window.addEventListener('scroll', updateActiveNavLink);

/** Appelle la fonction une fois au chargement pour définir le lien actif initial */
updateActiveNavLink();
requestAnimationFrame(() => movePill(document.querySelector('.nav a.active')));

/** Card Flip Effect
 * Cette section gère l'effet de retournement des cartes de compétences. 
 * Lorsqu'une carte est cliquée, la classe "is-flipped" est ajoutée ou supprimée à l'élément interne de la carte, 
 * ce qui déclenche l'animation de retournement définie dans le CSS.
 */
const card = document.querySelectorAll('.cardskill-card');

card.forEach(function(cardElement) {
    cardElement.addEventListener('click', function() {
        this.querySelector('.card__inner').classList.toggle('is-flipped');
    });
});

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