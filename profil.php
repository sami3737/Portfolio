<?php
// veille.php
include 'header.php';
?>
<main>
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
        <img alt="Programmation frontend" src="assets/img/frontend.png"/>
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
        <img alt="Programmation backend" src="assets/img/backend.png"/>
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
        <img alt="Base de données" src="assets/img/bdd.png"/>
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
        <img alt="Intégration de systèmes" src="assets/img/integration.png"/>
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
        <img alt="Services et infrastructure" src="assets/img/infra.png"/>
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
        <img alt="Outils de développement et environnement" src="assets/img/tools.png"/>
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
</main>
<?php
include 'footer.php';
?>