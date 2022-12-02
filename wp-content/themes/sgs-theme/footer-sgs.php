<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path  fill-opacity="1" d="M0,224L80,234.7C160,245,320,267,480,234.7C640,203,800,117,960,90.7C1120,64,1280,96,1360,112L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
</svg> -->

<footer>
    <div id="nousContacter" class="contact">
        <div class="form">
            <div class="formText">
                <h2>Nous contacter</h2>
                <p>Besoin d'un quelconque renseignement, avez-vous besoins d’une information ?</p>
            </div>
            <?= do_shortcode('[contact-form-7 id="150" title="Formulaire de contact 1"]') ?>
        </div>
        <div class="coordContainer">
            <div class="map">
                <h2>Carte</h2>
                <div class="iframeContainer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1298.8924421184915!2d3.3198190009927595!3d49.375143196602465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8c755aee4963ea3!2zNDnCsDIyJzMwLjUiTiAzwrAxOScxNC41IkU!5e0!3m2!1sfr!2sfr!4v1669971664911!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="coordonnees">
                <h2>Coordonnées</h2>
                <p><span class="logo -pin"></span><?= get_field('adresse_part_1') ?> <br> <?= get_field('adresse_part_2') ?></p>
                <p><span class="logo -message"></span><?= get_field('mail') ?></p>
                <p><span class="logo -phone"></span><?= get_field('telephone') ?></p>
            </div>
            <div class="reseaux">
                <h2>Réseaux</h2>
                <div class="reseauxIcons">
                    <a href="#" class="logo -facebook"></a>
                    <a href="#" class="logo -messenger"></a>
                    <a href="#" class="logo -instagram"></a>
                    <a href="#" class="logo -twitter"></a>
                </div>
            </div>
        </div>
    </div>

    <p class="copyright">&copy; 2021 - Soissons Game Show | Réalisé par VIGREUX Joël</p>

    <?php wp_footer(); ?>
</footer>


</body>

</html>