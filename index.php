<?php
// index.php
include 'header.php';
?>
<main>
    <!-- Indicateur de scroll -->
    <div class="bottom visible">
      <span class="scroll-indicator"></span>
    </div>
    <!-- Button de retour en haut -->
    <button id="back-to-top" title="Retour en haut">↑</button>

    <div class="container">
      <div class="dynamicContent">
      </div>
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
                    <a aria-label="Lien vers LinkedIn" href="https://www.linkedin.com/in/samuel-boutin-4b8089336/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a aria-label="Lien vers GitHub" href="https://github.com/sami3737" target="_blank"><i class="fab fa-github"></i></a>
                    <div>Mon tableau de synthèse:<a aria-label="Lien vers tableau de synthèse" href="assets/docs/E5_Tableau-de-synthese.xlsx" target="_blank"><i class="fas fa-file-excel"></i></a></div>
                    <div>Mon CV:<a aria-label="Lien vers CV" href="assets/docs/CV_Samuel_Boutin.pdf" target="_blank"><i class="fas fa-file-pdf"></i></a></div>
                </div>
            </div>
        </div>
      </section>
    </div>
  </main>
<?php
include 'footer.php';
?>