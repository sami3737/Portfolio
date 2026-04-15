<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Samuel Boutin – Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script defer src="assets/js/main.js"></script>
</head>
<body>

  <header>
    <h1>Portfolio - Samuel Boutin</h1>
    <p>Développeur web full‑stack passionné, je conçois des applications modernes en alliant performance, sécurité et expérience utilisateur.</p>
    <!-- Navigation -->
    <nav class="nav_bar">
      <div class="nav">
        <ul>
          <div class="nav-pill"></div>
          <li><a href="#about" class="active">Profil</a></li>
          <li><a href="#bts-sio">BTS SIO</a></li>
          <li><a href="#featured-projects">Projets</a></li>
          <li><a href="#docs">Documentations</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <!-- Indicateur de scroll -->
    <div class="bottom visible">
      <span class="scroll-indicator"></span>
    </div>

    <!-- Button de retour en haut -->
    <button id="back-to-top" title="Retour en haut">↑</button>

    <!-- Section À propos -->
    <section class="about" id="about">
      <h2>Profil</h2>
      <div class="row">
        <div class="info-card">
            <h3>Qui suis-je ?</h3>
          <p>Je m'appelle Samuel Boutin, actuellement en formation BTS Services Informatiques aux Organisations (SIO) option Solutions Logicielles et Applications Métiers (SLAM). Passionné par l'informatique depuis de nombreuses années, j'ai développé mes compétences en autodidacte bien avant d'intégrer un parcours académique.</p>
          <p>Mon intérêt pour le développement est né il y a près de 15 ans, notamment grâce à ma passion pour les jeux vidéo et leur fonctionnement. J'ai commencé par créer des sites web en HTML et CSS, dont un premier projet inspiré de l'univers Naruto, sous forme de site encyclopédique. Cela m'a progressivement amené à apprendre JavaScript, PHP, SQL ainsi que le C#.</p>
        </div>

        <div class="info-card">
          <h3>Parcours &amp; nouvelles technologies</h3>
          <p>Depuis mon entrée en BTS SIO, j'ai consolidé mes bases et découvert de nouvelles technologies et méthodes professionnelles :</p>
          <ul>
            <li>Approfondissement du développement web (front-end et back-end)</li>
            <li>Manipulation avancée de bases de données (SQL)</li>
            <li>Compréhension des architectures applicatives</li>
            <li>Découverte des bonnes pratiques de développement (organisation, logique, structuration du code)</li>
            <li>Travail en environnement de projet (méthodologies, logique métier)</li>
            <li>Initiation aux notions systèmes et réseaux en lien avec les applications</li>
          </ul>
          <p>Ce parcours me permet aujourd'hui d'avoir une vision plus globale du développement et de mieux comprendre les enjeux techniques d'un projet.</p>
        </div>

        <div class="info-card">
          <h3>Expérience</h3>
          <p>En parallèle de ma formation, mon apprentissage repose fortement sur la pratique personnelle. J'ai réalisé plusieurs projets, disponibles sur mon GitHub et mon portfolio, me permettant de :</p>
          <ul>
            <li>Développer des applications web complètes</li>
            <li>Travailler aussi bien sur le front-end que le back-end</li>
            <li>Résoudre des problématiques concrètes</li>
            <li>Gagner en autonomie et en rigueur</li>
          </ul>
          <p>Mon expérience professionnelle en tant qu'employé de magasin m'a également permis de développer un bon sens du service, de la communication et de la gestion des besoins utilisateurs.</p>
        </div>

        <div class="info-card">
          <h3>Objectifs</h3>
          <p>Mon objectif est de devenir développeur fullstack, capable de concevoir des applications complètes, performantes et sécurisées.</p>
          <p>Je souhaite continuer à monter en compétences sur des technologies modernes, notamment dans le développement web avancé, le cloud et les architectures applicatives.</p>
          <p>À terme, je veux évoluer vers des projets techniques ambitieux, tout en gardant une capacité d'adaptation aux évolutions rapides du secteur informatique.</p>
        </div>
        <div class="info-card">
          <h3>Qualités</h3>
          <p><strong>Persévérant :</strong><br><ul><li>Le développement demande du temps et de la réflexion. Ma capacité à ne pas abandonner face à un problème me permet d'aller jusqu'au bout des solutions.</li></ul></p>
          <p><strong>Esprit d'analyse :</strong><br><ul><li>Je suis capable de comprendre un problème, le découper et proposer des solutions logiques et efficaces.</li></ul></p>
          <p><strong>Autonome :</strong><br><ul><li>Mon parcours autodidacte m'a appris à apprendre seul, chercher des solutions et progresser rapidement.</li></ul></p>
          <p><strong>Curieux :</strong><br><ul><li>Toujours intéressé par les nouvelles technologies, j'aime découvrir, tester et comprendre de nouveaux outils ou concepts.</li></ul></p>
        </div>
      </div>
      
      <div class="skills-grid">
        <div class="cardskill-card skill-card">
          <div class="card__inner">
            <div class="img"></div>
            <div class="card__face card__face--front">
              <img src="assets/img/frontend.png"/>
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__body">
                  <p>HTML5, CSS3, JavaScript (ES6+)</p>
                  <p>Interfaces responsives, UX/UI</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="cardskill-card skill-card">
          <div class="card__inner">
            <div class="img"></div>
            <div class="card__face card__face--front">
              <img src="assets/img/backend.png"/>
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__body">
                  <p>PHP, C#</p>
                  <p>Intégrations API</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cardskill-card skill-card">
          <div class="card__inner">
            <div class="card__face card__face--front">
              <img src="assets/img/bdd.png"/>
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__body">
                  <p>Requêtes Préparées, Construction de queries</p>
                  <p>PostgreSQL, MySQL, MSSQL</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cardskill-card skill-card">
          <div class="card__inner">
            <div class="img"></div>
            <div class="card__face card__face--front">
              <img src="assets/img/integration.png"/>
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__body">
                  <p>PayPal API, Steam API, G2A, systèmes de paiement</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cardskill-card skill-card">
          <div class="card__inner">
            <div class="img"></div>
            <div class="card__face card__face--front">
              <img src="assets/img/infra.png"/>
            </div>
            <div class="card__face card__face--back">
              <div class="card__content">
                <div class="card__body">
                    <p>Apache, FTP/SFTP, WordPress</p>
                    <p>Déploiement automatisé</p>
                    <p>Docker (conteneurs, images, orchestration)</p>
                </div>
              </div>
            </div>
          </div>
        </div>

          <div class="cardskill-card skill-card">
            <div class="card__inner">
              <div class="img"></div>
              <div class="card__face card__face--front">
              <img src="assets/img/tools.png"/>
              </div>
              <div class="card__face card__face--back">
                <div class="card__content">
                  <div class="card__body">
                    <p>Git, GitHub, debugging</p>
                    <p>Gestion de projet (Kanboard)</p>
                    <p>Environnements de développement</p>
                    <p>(VSCode, PhpStorm, Eclipse)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- Section BTS SIO -->
    <section id="bts-sio" class="bts-sio">
      <h2>BTS SIO</h2>
      <div class="row">
        <div class="info-card">
          <p>
            <!-- Description du BTS SIO -->
            Le BTS Services informatiques aux organisations (SIO) forme des techniciens capables de produire et fournir des services informatiques à une organisation, d’assurer support et continuité de service, d’intégrer la cybersécurité à toutes les étapes, et de se spécialiser soit dans les infrastructures systèmes & réseaux (SISR), soit dans la conception/développement d’applications (SLAM).
          </p>
        </div>
        <div class="info-card">
          <h3>OPTION SLAM</h3>
          <p>
            L'option Solutions Logicielles et Applications Métiers (SLAM) du BTS SIO prépare les étudiants à devenir des développeurs capables de concevoir, développer, tester et maintenir des applications logicielles répondant aux besoins spécifiques d'une organisation. Les compétences acquises incluent la maîtrise de langages de programmation, la gestion de bases de données, l'intégration d'API, et la compréhension des architectures applicatives.
          </p>
          <h3>Métiers</h3>
          <ul>
            <li>Développeur Full-Stack</li>
            <li>Architecte Logiciel</li>
            <li>Analyste Programmeur</li>
          </ul>
        </div>
        <div class="info-card">
          <h3>OPTION SISR</h3>
          <p>
            L'option Services Informatiques aux Organisations (SISR) du BTS SIO prépare les étudiants à devenir des techniciens capables de concevoir, installer, gérer et maintenir les infrastructures informatiques d'une organisation. Les compétences acquises incluent la gestion des réseaux, la sécurité informatique, l'administration des systèmes d'exploitation et la gestion des bases de données.
          </p>
          <h3>Métiers</h3>
          <ul>
            <li>Administrateur Systèmes et Réseaux</li>
            <li>Technicien Support Informatique</li>
            <li>Consultant en Sécurité Informatique</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Section Projets Phares -->
    <section id="featured-projects">
      <h2>Projets principaux</h2>
      <div class="featured-projects">
        <!-- RustTech -->
        <div class="featured-card">
          <span class="featured-badge">Projet phare</span>
          <h3>RustTech – Boutique en ligne full-stack</h3>
          <p class="description">
            Plateforme e-commerce complète développée pour un serveur Rust avec intégration temps réel. Solution full-stack permettant aux joueurs d'acheter des objets virtuels et de les recevoir automatiquement en jeu via une connexion WebSocket sécurisée.
          </p>

          <div class="tech-stack">
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">JavaScript</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">PayPal API</span>
            <span class="tech-tag">WebSocket</span>
            <span class="tech-tag">REST API</span>
          </div>

          <div class="key-features">
            <h4>Fonctionnalités clés</h4>
            <ul>
              <li>Système de paiement sécurisé avec intégration PayPal complète</li>
              <li>Gestion utilisateur avec authentification et profils personnalisés</li>
              <li>Interface administrateur pour la gestion des produits et commandes</li>
              <li>Communication serveur-boutique en temps réel via WebSocket</li>
              <li>Système de livraison automatique des achats en jeu</li>
              <li>Historique des transactions et gestion des inventaires</li>
            </ul>
          </div>

          <div class="project-links">
            <a href="https://github.com/sami3737/rusttech" target="_blank" class="btn-primary">
              Voir le code →
            </a>
            <a href="https://demo.rust-evolution.net/rusttech-main/" target="_blank" class="btn-secondary">
              Voir le projet →
            </a>
          </div>
        </div>

        <!-- Boutique Rust Experimental -->
        <div class="featured-card">
          <span class="featured-badge">Projet phare</span>
          <h3>Boutique Rust Experimental – Plateforme multi-paiements</h3>
          <p class="description">
            Solution e-commerce avancée avec intégration de multiples systèmes de paiement internationaux. Architecture modulaire permettant une gestion complète des transactions avec support de différentes devises et méthodes de paiement.
          </p>

          <div class="tech-stack">
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">PayPal API</span>
            <span class="tech-tag">Steam API</span>
            <span class="tech-tag">G2A API</span>
            <span class="tech-tag">OAuth</span>
          </div>

          <div class="key-features">
            <h4>Fonctionnalités clés</h4>
            <ul>
              <li>Intégration de 3 systèmes de paiement (PayPal, Steam, G2A)</li>
              <li>Gestion multi-devises et conversion automatique</li>
              <li>Authentification Steam OAuth pour liaison de comptes</li>
              <li>Tableau de bord administrateur complet</li>
              <li>Système de codes promotionnels et réductions</li>
              <li>Statistiques de ventes et rapports détaillés</li>
            </ul>
          </div>

          <div class="project-links">
            <a href="https://github.com/sami3737/rust" target="_blank" class="btn-primary">
              Voir le code →
            </a>
            <a href="https://demo.rust-evolution.net/rust-main/index.php" target="_blank" class="btn-secondary">
              Voir le projet →
            </a>
          </div>
        </div>
      </div>
      
      <h2>Autres réalisations</h2>
      <div class="grid">
        <div class="card">
          <h3>Silkroad_CMS</h3>
          <p>Interface web de gestion pour serveur Silkroad Online. Connexion base MSSQL, gestion boutique et joueurs, système d'authentification.</p>
          <div class="project-links">
            <a href="https://github.com/sami3737/Akeno" target="_blank" class="btn-secondary">Voir le code</a>
          </div>
        </div>

        <div class="card">
          <h3>PNJGui – Plugin Minecraft</h3>
          <p>Plugin Java pour création d'interfaces graphiques avec PNJ. Développé pour serveurs Minecraft, permet des interactions customisées.</p>
          <div class="project-links">
            <a href="https://github.com/sami3737/NPJGui" target="_blank" class="btn-secondary">Voir le code</a>
          </div>
        </div>

        <div class="card">
          <h3>Anthony – Système de recrutement RP</h3>
          <p>Système de candidature en ligne pour serveur RP. Formulaires dynamiques, gestion des candidatures, notifications automatiques.</p>
          <div class="project-links">
            <a href="https://github.com/sami3737/anthony" target="_blank" class="btn-secondary">Voir le code</a>
            <a href="https://demo.rust-evolution.net/anthony/" target="_blank" class="btn-secondary">Voir le projet →</a>
          </div>
        </div>

        <div class="card">
          <h3>Leaderboard Rust Experimental</h3>
          <p>Vitrine temps réel (2018) affichant chat et classement des joueurs. Mise à jour dynamique, design responsive.</p>
          <div class="project-links">
            <a href="https://github.com/sami3737/leaderboard" target="_blank" class="btn-secondary">Voir le code</a>
            <a href="https://demo.rust-evolution.net/leaderboard/" target="_blank" class="btn-secondary">Voir le projet →</a>
          </div>
        </div>

      </div>
    </section>

    <!-- Section Documentations -->
    <section id="docs">
      <h2>Documentations techniques</h2>
      <!-- Documentation Wordpress -->
      <div class="grid">
        <div class="card">
          <h3>Documentation Wordpress</h3>
          <p>Guide détaillé de la compréhension du fonctionnement de Wordpress. (Mise en page Gamma)</p>
          <div class="project-links">
            <a href="assets/docs/Restitution-document-Wordpress.pdf" target="_blank" class="btn-secondary">Télécharger</a>
          </div>
        </div>
        <!-- Documentation Docker -->
        <div class="card">
          <h3>Documentation Docker</h3>
          <p>Guide détaillé de l'utilisation de Docker pour le développement et le déploiement d'applications. (Mise en page Gamma)</p>
          <div class="project-links">
            <a href="assets/docs/Docker-et-la-conteneurisation.pdf" target="_blank" class="btn-secondary">Télécharger</a>
          </div>
        </div>
        <!-- Documentation Mise à disposition des services -->
        <div class="card">
          <h3>Documentation Mise à disposition des services</h3>
          <p>Guide détaillé de la mise à disposition des services déployés en local. (Mise en page Gamma)</p>
          <div class="project-links">
            <a href="assets/docs/samuel-boutin-MISE-A-DISPOSITION-DES-SERVICES.pdf" target="_blank" class="btn-secondary">Télécharger</a>
          </div>
        </div>
        <!-- Exemple de diagramme de Gantt -->
        <div class="card">
          <h3>Exemple de diagramme de Gantt</h3>
          <p>Exemple de diagramme de Gantt réalisé pour un projet de développement d'application.</p>
          <div class="project-links">
            <a href="assets/img/Diagramme de Gantt.png" target="_blank" class="btn-secondary">Télécharger</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Contact -->
    <section id="contact">
      <h2>Contact</h2>
      <div class="contact-section">
          <div class="form-side">
              <p>Voulez-vous me contacter ? Remplissez le formulaire ci-dessous et je vous répondrai dans les plus brefs délais.</p>
              <form id="contact-form" action="send_email.php" method="POST">
                  <div class="input-field">
                      <input type="text" placeholder="Votre nom" name="name" required>
                  </div>
                  <div class="input-field">
                      <input type="email" placeholder="Votre email" name="email" required>
                  </div>
                  <div class="input-field">
                      <textarea placeholder="Votre message..." name="message" required></textarea>
                  </div>
                  <button type="submit" class="submit-btn">Envoyer le message →</button>
              </form>
          </div>
          <div class="info-side">
              <div>
                  <h3>Restez en contact</h3>
                  <p>Je suis actuellement disponible pour du travail freelance et des collaborations. N'hésitez pas à me contacter via le formulaire ou à me suivre sur les réseaux sociaux.</p>
              </div>
              <div class="social-icons">
                  <a href="https://www.linkedin.com/in/samuel-boutin-4b8089336/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  <a href="https://github.com/sami3737" target="_blank"><i class="fab fa-github"></i></a>
                  <div>Mon CV:<a href="assets/docs/CV_Samuel_Boutin.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
              </div>
          </div>
      </div>
    </section>
  </main>

  <footer>
    © <?php echo date("Y"); ?> Samuel Boutin – Portfolio
  </footer>

</body>
</html>