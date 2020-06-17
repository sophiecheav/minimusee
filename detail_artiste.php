<?php
  include "templates/include/head.php";
?>

        <!-- Masthead-->
        <header class="masthead-artistpage">
            <div class="container">
                <div class="masthead-heading text-uppercase">Page artiste</div>
                <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#biographie">Biographie</a>
                <a class="btn btn-primary btn-md text-uppercase js-scroll-trigger" href="#oeuvres">Oeuvres</a>
            </div>
        </header>

        <section class="page-section ivorycolor-bg">
            <div class="container" id="biographie">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Frida Kahlo (1907 - 1954)</h2>
                    <h3 class="section-subheading text-muted">Biographie</h3>
                    <p>Magdalena Frida Carmen Kahlo Calderón1 ou Frida Kahlo, née le 6 juillet 1907 dans une démarcation territoriale de l'actuelle entité fédérative de Mexico, la délégation de Coyoacán, et morte le 13 juillet 1954 au même endroit, est une artiste peintre mexicaine.</p>
                </div>
              </div>
            </section>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio" >
        <div class="container" id="oeuvres">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ses oeuvres</h2>
                <h3 class="section-subheading text-muted">Galerie</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                      <img class="img-fluid" src="templates/img/FridaKahlo_Autoportrait.jpg" alt="Peinture Frida Kahlo - Autoportrait au collier d'épines et colibri"/>
                      <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Autoportrait au collier d'épines et colibri</div>
                        <div class="portfolio-caption-subheading text-muted">1940</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                      <img class="img-fluid" src="templates/img/la-colonne-brisee.jpg" alt="Peinture Frida Kahlo - La Colonne brisée"/>
                      <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">La Colonne brisée</div>
                        <div class="portfolio-caption-subheading text-muted">1944</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                      <img class="img-fluid" src="templates/img/les-deux-fridas-portrait.jpg" alt="Peinture Frida Kahlo - Les Deux Fridas"/>
                      <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Les Deux Fridas</div>
                        <div class="portfolio-caption-subheading text-muted">1939</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                      <img class="img-fluid" src="templates/img/autobus.jpg" alt="Peinture Frida Kahlo - Autobus"/>
                      <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Autobus</div>
                        <div class="portfolio-caption-subheading text-muted">1929</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                      <img class="img-fluid" src="templates/img/me-and-my-parrots.jpg" alt="Peinture Frida Kahlo - Moi et mes perroquets"/>
                      <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Moi et mes perroquets</div>
                        <div class="portfolio-caption-subheading text-muted">1941</div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                      <img class="img-fluid" src="templates/img/quelques-petites-entailles.jpg" alt="Peinture Frida Kahlo - Quelques petites entailles"/>
                      <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Quelques petites entailles</div>
                        <div class="portfolio-caption-subheading text-muted">1935</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <?php include "templates/include/footer.php" ?>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="templates/assets/mail/jqBootstrapValidation.js"></script>
    <script src="templates/assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="templates/js/scripts.js"></script>
</body>
</html>
