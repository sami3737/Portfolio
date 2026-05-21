<?php
// veille.php
include 'header.php';
?>
<main>
    <section id="intro" class="intro">
        <h2>Introduction</h2>
        <div class="row">
            <div class="info-card">
                <p>Cette veille technologique porte sur Unity, un moteur de jeu utilisé dans le développement de jeux vidéo. Le secteur du jeu vidéo évolue rapidement, notamment avec la montée des jeux indépendants en 2D.</p>
                <p>L’objectif de cette veille est de comprendre les outils proposés par Unity, ses évolutions récentes, ainsi que son positionnement face à la concurrence.</p>
                <p>Le développement 2D reste très populaire car il permet de créer des jeux plus rapidement, avec moins de ressources, tout en offrant une grande créativité.</p>
            </div>
        </div>
    </section>
    <section class="unity" id="unity">
        <h2>Présentation de Unity</h2>
        <div class="row">
            <div class="info-card">
                <p>Unity est un moteur de jeu développé par Unity Technologies. Il permet de créer des jeux en 2D et 3D.</p>
                <p>Le moteur repose sur l’utilisation du langage C#, et fonctionne avec un système de composants (GameObjects + scripts).</p>
                <h3>Fonctionnement général :</h3>
                <ul>
                    <li>Scene : espace de travail du jeu</li>
                    <li>GameObject : élément du jeu</li>
                    <li>Component : comportement (script, physique…)</li>
                </ul>
                <h3>Avantages :</h3>
                <ul>
                    <li>Facilité de prise en main</li>
                    <li>Grande communauté</li>
                    <li>Multiplateforme</li>
                    <li>Asset Store riche</li>
                </ul>

                <h3>Inconvénients :</h3>
                <ul>
                    <li>Performances parfois inférieures à Unreal</li>
                    <li>Gestion des licences controversée récemment</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="tech" id="tech">
        <h2>Technologies utilisées en 2D</h2>
        <div class="row">
            <div class="info-card">
                <h3>Sprites</h3>
                <p>Les sprites sont des images 2D représentant les objets du jeu. Ils sont utilisés pour afficher les personnages, décors et éléments interactifs.</p>

                <h3>Tilemap</h3>
                <p>Le système de Tilemap permet de créer des niveaux facilement en utilisant des blocs répétables. Cela optimise les performances et accélère le développement.</p>

                <h3>Physique 2D</h3>
                <p>Unity utilise un moteur physique basé sur Box2D. Il permet de gérer les collisions, la gravité et les interactions entre objets.</p>

                <h3>Animation</h3>
                <p>Le système Animator permet de créer des animations complexes avec des transitions entre états.</p>

                <h3>URP (Universal Render Pipeline)</h3>
                <p>URP permet d’optimiser le rendu graphique et d’ajouter des effets visuels avancés en 2D.</p>
            </div>
        </div>
    </section>

    <section class="news" id="news">
        <h2>Évolutions récentes de Unity (veille technologique)</h2>
        <div class="row">
            <div class="info-card">
                <p>Cette section présente les évolutions récentes du moteur Unity. Elle permet de comprendre les orientations prises par l’éditeur en matière de performances, de graphisme et de développement 2D.</p>

                <p>Les acronymes utilisés dans cette section sont définis afin de faciliter la compréhension :</p>

                <ul>
                    <li><strong>URP (Universal Render Pipeline)</strong> : pipeline de rendu optimisé pour améliorer les performances graphiques</li>
                    <li><strong>HDRP (High Definition Render Pipeline)</strong> : pipeline de rendu haut de gamme pour les graphismes avancés</li>
                    <li><strong>2D Renderer</strong> : système de rendu spécifique pour les jeux en 2D</li>
                    <li><strong>Shader Graph</strong> : outil visuel permettant de créer des shaders sans code</li>
                </ul>
            </div>

            <div class="timeline">
                <div class="timeline-item left">
                    <div class="timeline-content">
                    <h3>2022 – Amélioration du moteur 2D</h3>
                    <p>Unity a amélioré ses outils dédiés à la 2D, notamment le système d’animation (Animator) et la gestion des sprites.</p>
                    <p>Le moteur physique 2D (basé sur Box2D) a été optimisé pour offrir de meilleures performances.</p>

                    <p>Ces améliorations facilitent le développement de jeux indépendants.</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-content">
                        <h3>2023 – Optimisation du rendu (URP)</h3>
                        <p>Le <strong>URP (Universal Render Pipeline)</strong> a été amélioré afin d’optimiser les performances sur mobile et PC.</p>

                        <p>Le rendu 2D bénéficie désormais d’effets visuels plus avancés :
                        ombres, lumières dynamiques, post-processing.</p>

                        <p>Ces évolutions permettent de créer des jeux 2D plus immersifs.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>2024 – Amélioration des outils de production</h3>
                        <p>Unity a amélioré le <strong>Shader Graph</strong>, permettant de créer des effets visuels complexes sans coder.</p>

                        <p>Le <strong>2D Renderer</strong> a été optimisé pour gérer des scènes plus complexes avec de meilleures performances.</p>

                        <p>Ces outils réduisent le temps de développement et facilitent la création.</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-content">
                        <h3>2025 – Focus sur les performances et le mobile</h3>
                        <p>Unity met l’accent sur l’optimisation des performances, notamment pour les jeux mobiles.</p>

                        <p>Le moteur améliore la gestion de la mémoire et du rendu pour supporter des jeux plus lourds.</p>

                        <p>Cela permet aux développeurs de créer des jeux plus fluides et accessibles.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-content">
                        <h3>Tendance actuelle – IA et automatisation</h3>
                        <p>Unity commence à intégrer des outils liés à l’intelligence artificielle (IA).</p>

                        <p>Ces outils permettent d’automatiser certaines tâches comme l’animation ou la génération de contenu.</p>

                        <p>Cette évolution pourrait transformer la manière de développer des jeux dans le futur.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="compare" id="compare">
        <h2>Comparaison avec d'autres moteurs</h2>
        <div class="row">
            <div class="info-card">

                <h3>Unity vs Unreal Engine</h3>
                <ul>
                    <li>Unity : plus accessible, meilleur pour 2D</li>
                    <li>Unreal : plus puissant graphiquement</li>
                </ul>

                <h3>Unity vs Godot</h3>

                <ul>
                    <li>Unity : plus complet, plus professionnel</li>
                    <li>Godot : open source, plus léger</li>
                </ul>

            </div>
        </div>
    </section>

    <section class="analysis" id="analysis">
        <h2>Analyse personnelle</h2>
        <div class="row">
            <div class="info-card">
                <p>Unity reste aujourd’hui une référence dans le développement de jeux indépendants. Son orientation vers la 2D et sa facilité d’utilisation en font un outil accessible.</p>

                <p>Cependant, les changements récents de politique économique ont suscité des critiques, ce qui pourrait pousser certains développeurs vers des alternatives comme Godot.</p>

                <p>Malgré cela, Unity continue d’évoluer et d’améliorer ses outils. Il reste donc un moteur incontournable dans l’industrie.</p>

                <p>Dans le cadre de ma formation, Unity représente une technologie intéressante à maîtriser, car elle permet de développer rapidement des projets concrets.</p>
            </div>
        </div>
    </section>
    
    <section class="legal" id="legal">
        <h2>Obligations légales dans le développement Unity</h2>
        <div class="row">
            <div class="info-card">
        <p>
            Le développement d’un jeu vidéo ou d’une application avec Unity implique plusieurs obligations légales,
            notamment concernant la protection des données personnelles, la monétisation, la publicité et la sécurité.
            Ces règles proviennent principalement du RGPD (Règlement Général sur la Protection des Données),
            de la directive ePrivacy, des règles des stores mobiles et des législations nationales applicables.
        </p>

        <!-- RGPD -->
        <article>
            <h3>1. Protection des données personnelles (RGPD)</h3>

            <p>
                Le RGPD impose d’informer les utilisateurs sur les données collectées, leur utilisation
                et leur durée de conservation.
            </p>

            <h4>Concrètement dans Unity :</h4>
            <ul>
                <li>Unity Analytics</li>
                <li>Firebase Analytics</li>
                <li>Comptes utilisateurs</li>
                <li>Cloud Save</li>
                <li>Publicités ciblées</li>
            </ul>

            <h4>Durées de conservation recommandées :</h4>
            <ul>
                <li>Logs techniques : 6 à 12 mois</li>
                <li>Données analytics : 13 mois maximum</li>
                <li>Comptes inactifs : 2 à 3 ans</li>
            </ul>

            <h4>Risques :</h4>
            <ul>
                <li>Amendes administratives (jusqu’à 20 millions € ou 4 % du CA mondial)</li>
                <li>Suppression du jeu des stores</li>
                <li>Plaintes utilisateurs</li>
            </ul>

            <h4>Bonnes pratiques :</h4>
            <ul>
                <li>Limiter les données collectées</li>
                <li>Ajouter une politique de confidentialité</li>
                <li>Documenter les traitements de données</li>
            </ul>
        </article>

        <!-- CONSENTEMENT -->
        <article>
            <h3>2. Consentement et trackers (ePrivacy)</h3>

            <p>
                Les SDK publicitaires ou analytiques doivent respecter les règles de consentement utilisateur.
            </p>

            <h4>SDK concernés :</h4>
            <ul>
                <li>Unity Ads</li>
                <li>Firebase</li>
                <li>Google AdMob</li>
                <li>AppLovin</li>
            </ul>

            <h4>Obligations :</h4>
            <ul>
                <li>Obtenir un consentement explicite avant le tracking</li>
                <li>Permettre le refus des cookies et trackers</li>
                <li>Informer clairement l’utilisateur</li>
            </ul>

            <h4>Risques :</h4>
            <ul>
                <li>Sanctions CNIL</li>
                <li>Blocage publicitaire</li>
                <li>Suppression du store</li>
            </ul>

            <h4>Recommandations :</h4>
            <ul>
                <li>Ajouter une bannière de consentement</li>
                <li>Bloquer les SDK avant acceptation</li>
                <li>Permettre la modification du choix utilisateur</li>
            </ul>
        </article>

        <!-- DROITS UTILISATEURS -->
        <article>
            <h3>3. Droits des utilisateurs</h3>

            <p>
                Les utilisateurs disposent de plusieurs droits sur leurs données personnelles.
            </p>

            <ul>
                <li>Droit d’accès aux données</li>
                <li>Droit de rectification</li>
                <li>Droit à l’effacement (“droit à l’oubli”)</li>
                <li>Droit à la portabilité</li>
            </ul>

            <h4>Délai légal :</h4>
            <p>Les demandes doivent généralement être traitées sous 1 mois.</p>

            <h4>Recommandations :</h4>
            <ul>
                <li>Prévoir un contact RGPD</li>
                <li>Permettre la suppression des comptes</li>
                <li>Exporter les données utilisateur sur demande</li>
            </ul>
        </article>

        <!-- MINEURS -->
        <article>
            <h3>4. Protection des mineurs (COPPA / RGPD Enfants)</h3>

            <p>
                Les jeux destinés aux enfants sont soumis à des règles renforcées.
            </p>

            <h4>Réglementations :</h4>
            <ul>
                <li>COPPA (Children’s Online Privacy Protection Act)</li>
                <li>RGPD Enfants</li>
            </ul>

            <h4>Obligations :</h4>
            <ul>
                <li>Limiter la collecte de données</li>
                <li>Obtenir le consentement parental si nécessaire</li>
                <li>Éviter la publicité ciblée pour les mineurs</li>
            </ul>

            <h4>Risques :</h4>
            <ul>
                <li>Suppression des stores</li>
                <li>Sanctions financières</li>
            </ul>

            <h4>Bonnes pratiques :</h4>
            <ul>
                <li>Activer les paramètres “Designed for Families”</li>
                <li>Désactiver le tracking publicitaire</li>
            </ul>
        </article>

        <!-- POLITIQUE CONFIDENTIALITE -->
        <article>
            <h3>5. Politique de confidentialité et mentions légales</h3>

            <p>
                Une politique de confidentialité est obligatoire dès qu’une donnée personnelle est collectée.
            </p>

            <h4>Elle doit contenir :</h4>
            <ul>
                <li>Données collectées</li>
                <li>Finalités des traitements</li>
                <li>Durées de conservation</li>
                <li>Droits des utilisateurs</li>
                <li>Coordonnées du responsable</li>
            </ul>

            <h4>Où l’afficher :</h4>
            <ul>
                <li>Site web</li>
                <li>Stores mobiles</li>
                <li>Menu du jeu</li>
            </ul>
        </article>

        <!-- CGU -->
        <article>
            <h3>6. Conditions Générales d’Utilisation (CGU)</h3>

            <p>
                Les CGU définissent les règles d’utilisation du jeu ou de l’application.
            </p>

            <h4>Elles peuvent inclure :</h4>
            <ul>
                <li>Règles communautaires</li>
                <li>Gestion des comptes bannis</li>
                <li>Restrictions d’utilisation</li>
                <li>Responsabilités de l’éditeur</li>
            </ul>

            <h4>Recommandations :</h4>
            <ul>
                <li>Prévoir des CGU même pour un petit projet</li>
                <li>Afficher les CGU avant création de compte</li>
            </ul>
        </article>

        <!-- MONETISATION -->
        <article>
            <h3>7. Achats intégrés et monétisation</h3>

            <p>
                Les achats in-app doivent respecter les règles des plateformes et du droit de la consommation.
            </p>

            <h4>Obligations :</h4>
            <ul>
                <li>Afficher clairement les prix</li>
                <li>Informer sur les abonnements</li>
                <li>Respecter les règles Google Play et App Store</li>
            </ul>

            <h4>Durée de conservation :</h4>
            <ul>
                <li>Factures et preuves d’achat : 10 ans</li>
            </ul>

            <h4>Risques :</h4>
            <ul>
                <li>Litiges consommateurs</li>
                <li>Suppression des achats intégrés</li>
            </ul>

            <h4>Bonnes pratiques :</h4>
            <ul>
                <li>Éviter les achats trompeurs</li>
                <li>Informer clairement sur les probabilités des loot boxes</li>
            </ul>
        </article>

        <!-- SECURITE -->
        <article>
            <h3>8. Sécurité des données et violations</h3>

            <p>
                Le développeur doit protéger les données stockées et prévenir les accès non autorisés.
            </p>

            <h4>Mesures recommandées :</h4>
            <ul>
                <li>Utiliser HTTPS</li>
                <li>Chiffrer les mots de passe</li>
                <li>Limiter les accès administrateurs</li>
                <li>Mettre à jour les SDK Unity</li>
            </ul>

            <h4>Violation de données :</h4>
            <p>
                En cas de fuite de données, une notification à la CNIL peut être obligatoire sous 72 heures.
            </p>

            <h4>Risques :</h4>
            <ul>
                <li>Sanctions réglementaires</li>
                <li>Atteinte à la réputation du projet</li>
            </ul>
        </article>

        <!-- STORES -->
        <article>
            <h3>9. Obligations liées aux stores</h3>

            <h4>Google Play :</h4>
            <ul>
                <li>Data Safety Form obligatoire</li>
                <li>Déclaration des permissions sensibles</li>
            </ul>

            <h4>App Store :</h4>
            <ul>
                <li>App Privacy Details</li>
                <li>App Tracking Transparency (ATT)</li>
            </ul>

            <h4>ATT (App Tracking Transparency) :</h4>
            <p>
                Apple impose une demande d’autorisation avant tout tracking publicitaire.
            </p>
        </article>
        </div>
        </div>
    </section>

    <section class="sources" id="sources">
        <h2>Sources de la veille technologique</h2>
            <div class="row">
                <div class="info-card">

                    <p>Cette veille technologique s’appuie sur des sources fiables et régulièrement mises à jour afin de garantir la pertinence des informations présentées.</p>

                    <h3>Documentation officielle</h3>
                    <ul>
                        <li>
                            Site officiel : <a href="https://unity.com" target="_blank">https://unity.com</a>
                        </li>

                        <li>
                            Documentation Unity : <a href="https://docs.unity3d.com" target="_blank">https://docs.unity3d.com</a>
                        </li>
                        <li>
                            Documentation URP : <a href="https://docs.unity3d.com/Packages/com.unity.render-pipelines.universal@latest" target="_blank">URP Documentation</a>
                        </li>
                    </ul>

                    <h3>Actualités et évolutions</h3>
                    <ul>
                        <li>
                            Blog officiel Unity : <a href="https://blog.unity.com" target="_blank">https://blog.unity.com</a>
                        </li>

                        <li>
                            Chaîne YouTube Unity : <a href="https://www.youtube.com/@unity" target="_blank">Unity YouTube</a>
                        </li>
                        <li>
                            Actualités sur l'IA et les outils d'automatisation : <a href="https://unity.com/features/ai" target="_blank">Unity AI</a>
                        </li>
                    </ul>

                    <h3>Ressources techniques</h3>
                    <ul>
                        <li>
                            Tutoriels et documentation sur le développement 2D : <a href="https://learn.unity.com" target="_blank">https://learn.unity.com</a>
                        </li>

                        <li>
                            Forum développeurs Unity : <a href="https://forum.unity.com" target="_blank">https://forum.unity.com</a>
                        </li>
                    </ul>

                    <h3>Veille complémentaire</h3>
                    <ul>
                        <li>
                            Articles et vidéos de créateurs spécialisés en game development
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@Brackeys/videos" target="_blank">Brackeys YouTube</a>
                        </li>
                    </ul>

                    <h3>Méthodologie de veille</h3>
                    <p>Pour réaliser cette veille, plusieurs types de sources ont été utilisés :</p>

                    <ul>
                        <li>Documentation officielle pour les aspects techniques</li>
                        <li>Blogs et actualités pour les évolutions récentes</li>
                        <li>Communautés de développeurs pour les retours d’expérience</li>
                    </ul>

                    <p>Les informations ont été croisées afin d’assurer leur fiabilité et leur actualisation.</p>
                </div>
            </div>
    </section>
</main>
<?php
include 'footer.php';
?>