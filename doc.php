<?php
include 'header.php';
?>

<main>
  <section id="docs">
    <h2>Livrables et ressources techniques</h2>

    <p class="docs-intro">
      Cette rubrique rassemble les productions directement associées à mes projets ainsi que les supports techniques utilisés pour développer mes compétences. Les dossiers du projet CFA sont également accessibles depuis la fiche du projet phare.
    </p>

    <h3 class="docs-group-title">Livrables associés aux réalisations</h3>

    <div class="grid docs-grid">

      <article class="card doc-card doc-card--wide">
        <div>
          <span class="doc-category">HAROPA PORT · Projet phare</span>
          <h3>Digitalisation du suivi des astreintes CFA</h3>

          <p>
            Ensemble documentaire couvrant la saisie métier dans Coswin,
            la conception du rapport analytique dans Jaspersoft Studio
            et la restitution dans Jaspersoft Server.
          </p>

          <div class="doc-tags">
            <span>Coswin 8i12</span>
            <span>Jaspersoft</span>
            <span>SQL / JDBC</span>
            <span>Épreuve E5</span>
          </div>
        </div>

        <div class="doc-links">
          <a href="assets/docs/Fiche_Projet_Globale_CFA_BOUTIN_Samuel.docx"
             download
             class="btn-primary">
            Dossier global DOCX
          </a>

          <a href="assets/docs/Fiche_Projet_COSWIN_CFA_BOUTIN_Samuel.docx"
             download
             class="btn-secondary">
            Fiche Coswin
          </a>

          <a href="assets/docs/Jaspersoft_CFA_Procedure_E5_BOUTIN_Samuel.docx"
             download
             class="btn-secondary">
            Procédure Studio
          </a>

          <a href="assets/docs/Jaspersoft_Server_Procedure_E5_BOUTIN_Samuel.docx"
             download
             class="btn-secondary">
            Procédure Server
          </a>
        </div>
      </article>

      <article class="card doc-card">
        <div>
          <span class="doc-category">Site e-commerce</span>
          <h3>Administration du site WordPress</h3>

          <p>
            Support lié au fonctionnement de WordPress et à l’administration
            de la boutique, complété par la gestion des sauvegardes BackWPup,
            des droits d’accès et des évolutions du site.
          </p>

          <div class="doc-tags">
            <span>WordPress</span>
            <span>WooCommerce</span>
            <span>BackWPup</span>
          </div>
        </div>

        <div class="doc-links">
          <a href="assets/docs/Restitution-document-Wordpress.pdf"
             download
             class="btn-secondary">
            Télécharger le support
          </a>
        </div>
      </article>

      <article class="card doc-card">
        <div>
          <span class="doc-category">Projet personnel · Infrastructure</span>
          <h3>NAS Synology sécurisé</h3>

          <p>
            Documentation de la centralisation des fichiers, de la gestion
            des utilisateurs et permissions, du DDNS, d’OpenVPN et de la
            résolution d’un incident TLS.
          </p>

          <div class="doc-tags">
            <span>NAS</span>
            <span>OpenVPN</span>
            <span>Sécurité</span>
          </div>
        </div>

        <div class="doc-links">
          <a href="assets/docs/NAS.pdf"
             download
             class="btn-secondary">
            Télécharger la documentation
          </a>
        </div>
      </article>

      <article class="card doc-card">
        <div>
          <span class="doc-category">Projet personnel · Automatisation</span>
          <h3>FileSorter</h3>

          <p>
            Présentation de l’outil Python de classement automatique des
            ressources pédagogiques, avec surveillance de dossier, OCR,
            IA locale et apprentissage des corrections.
          </p>

          <div class="doc-tags">
            <span>Python</span>
            <span>Ollama</span>
            <span>OCR</span>
          </div>
        </div>

        <div class="doc-links">
          <a href="assets/docs/FileSorter_Presentation.pdf"
             download
             class="btn-secondary">
            Télécharger la présentation
          </a>
        </div>
      </article>

    </div>

    <h3 class="docs-group-title">Ressources d’apprentissage</h3>

    <div class="grid docs-grid">

      <article class="card doc-card">
        <div>
          <span class="doc-category">Développement et déploiement</span>
          <h3>Docker et la conteneurisation</h3>

          <p>
            Support technique consacré à l’utilisation de Docker pour
            développer, isoler et déployer des applications.
          </p>
        </div>

        <div class="doc-links">
          <a href="assets/docs/Docker-et-la-conteneurisation.pdf"
             download
             class="btn-secondary">
            Télécharger le support
          </a>
        </div>
      </article>

      <article class="card doc-card">
        <div>
          <span class="doc-category">Méthode E5</span>
          <h3>Mise à disposition des services</h3>

          <p>
            Support de synthèse sur la mise à disposition d’un service
            informatique déployé localement et sur les contrôles à effectuer.
          </p>
        </div>

        <div class="doc-links">
          <a href="assets/docs/samuel-boutin-MISE-A-DISPOSITION-DES-SERVICES.pdf"
             download
             class="btn-secondary">
            Télécharger le support
          </a>
        </div>
      </article>

      <article class="card doc-card">
        <div>
          <span class="doc-category">Gestion de projet</span>
          <h3>Planification et suivi</h3>

          <p>
            Diagramme de Gantt utilisé comme support de planification et
            de suivi d’un projet de développement.
          </p>
        </div>

        <div class="doc-links">
          <a href="assets/img/Diagramme%20de%20Gantt.png"
             download
             class="btn-secondary">
            Télécharger le diagramme
          </a>
        </div>
      </article>

    </div>
  </section>
</main>

<?php
include 'footer.php';
?>