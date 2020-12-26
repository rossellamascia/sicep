<?php get_header(); ?>
<?php add_revslider('home', 'homepage'); ?>
<div class="container-fluid sfondotest p-5 min-vh-100" id="chisiamo">
    <div class="row ">
        <div class="col-12 col-md-6 boxcontenutocentrato">
            <div class="row ">
                <div class="col-8 ml-5" style="padding-top: 8rem;">
                    <h2>Chi Siamo</h2>
                    <p>
                        Diamo forma all&apos;energia con le nostre mani. </br>
                        Costruiamo trasformatori da 50 anni con </br>
                        intelligenza artigiana. </br>
                        Siamo una perla nel mare magno della migliore</br>
                        manifattura italiana. Il fondatore Pietro Marenzi ha</br>
                        scelto Tecna per dare forma al futuro del lavoro</br>
                        sapiente di tutta una vita. Tecna si impegna a </br>
                        portare i prodotti SICEP nel mondo per i prossimi </br>
                        50 anni. Con identica passione.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 text-center" style="padding-top: 8rem;">
            <img src="/wp-content/themes/sicep/img/trasformatore.png" class="img-fluid mx-auto" style="width: 65%;" alt="trasformatore">

        </div>
    </div>
</div>
<div class="container-fluid" id="comelavoriamo">
    <div class="row">
        <div class="p-0 col-md-5">
            <img class="img-fluid d-block" src="/wp-content/themes/sicep/img/come-lavoriamo.jpg"> </div>
        <div class="col-12 col-md-7 bg-grigio">
            <div class="row ">
                <div class="col-8 ml-4" style="padding-top: 12rem;padding-bottom: 12rem;">
                    <h2>Come lavoriamo</h2>
                    <p>
                        Con le mani. E con l’intelligenza delle mani.</br>
                        La mano è lo strumento espressivo dell’umana</br>
                        intelligenza: essa è l’organo della mente, scriveva</br>
                        Maria Montessori. In SICEP lo sappiamo da sempre. </br>
                        Avvolgiamo a mano il rame nei nostri trasformatori. </br></br>

                        Arrotoliamo a mano la carta speciale delle bobine. </br>
                        La cura dei particolari è maniacale. </br>
                        Così come è massima la sartorialità, la capacità di creare </br>
                        la migliore soluzione possibile alle richieste</br>
                        specifiche di ciascun cliente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding-top: 8rem; padding-bottom:8rem;">
    <div class="row">
        <div class="col-12 text-center ">
            <h3 class="text-center" style="padding-bottom: 0.5rem;">Le nostre collaborazioni</h3>
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-34.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-35.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-36.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-37.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-38.png" class="img-fluid loghi" style="width: 7%;" alt="ferrari">
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-39.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-40.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-41.png" class="img-fluid loghi" style="width: 12%;" alt="">
            <img src="<?php site_url() ?>/wp-content/uploads/2020/08/Livello-42.png" class="img-fluid loghi" style="width: 12%;" alt="">
        </div>

    </div>
</div>

<?php add_revslider('gallery', 'homepage'); ?>
<!--mappa-->
<!--The div element for the map -->
<div id="map"></div>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {
            lat: -25.344,
            lng: 131.036
        };
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
<script defer src="https://maps.googleapis.com/maps/api/js?key=wxhNsOQ96AnRyqlrJjll&callback=initMap"></script>
<div class="container-fluid sfondotestdue p-5" id="contattaci">
    <div class="row">
        <div class="col-12 col-md-6 boxcontenutocentrato min-vh-100">
            <div class="row">
                <div class="col-8 col-sm-12" style="padding-bottom: 20rem;">
                    <h3>Scrivici per qualsiasi cosa tu abbia bisogno!
                        Saremo contenti di poterti aiutare.</h3>
                    <?php echo do_shortcode('[contact-form-7 id="451" title="Modulo di contatto 1"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <section class="contattaci" id="contattaci" style=" background-image: url('<?php site_url() ?>/wp-content/uploads/2020/08/contattaci-all.jpg');
  background-repeat: no-repeat;
  background-position: center right;
  background-size: cover;
  width: 100%;
  height: auto;
">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="padding-top: 5rem;padding-bottom: 15rem;">
                <h3>Scrivici per qualsiasi cosa tu abbia bisogno!
                    Saremo contenti di poterti aiutare.</h3>
                <?php //echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); 
                ?>

            </div>
            <div class="col-lg-6" style="padding-top: 15rem;padding-bottom: 5rem;">

            </div>
        </div>
    </div>
</section> -->
<?php get_footer(); ?>