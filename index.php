<?php
  include "templates/include/head.php";
?>

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">Le Mini Musée</div>
                <div class="masthead-subheading">Les petites oeuvres de grande renommée...</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="artistes.php">Découvrez nos artistes</a>
            </div>
        </header>
        <!-- presentation-->
        <section class="page-section ivorycolor-bg">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Présentation</h2>
                    <h3 class="section-subheading text-muted">ou la grande histoire des petites oeuvres d'art...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </section>

        <!-- équipe-->
        <section class="page-section bg-light">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">L'équipe</h2>
                    <h3 class="section-subheading text-muted">à votre écoute</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="templates/img/justinepetit.jpg" alt="photo justine petit"/>
                            <h4>Justine Petit</h4>
                            <p class="text-muted">Directrice artistique</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="templates/img/lilianepouce.jpg" alt="" />
                            <h4>Liliane Pouce</h4>
                            <p class="text-muted">Directrice de la régie des oeuvres</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="templates/img/ronpygmee.jpg" alt="" />
                            <h4>Ron Pygmée</h4>
                            <p class="text-muted">Directeur des partenariats et mécénat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactez-nous</h2>
                    <h3 class="section-subheading text-muted">en remplissant le formulaire ci-dessous...</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Votre nom *" required="required"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Votre adresse mail *" required="required"/>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Votre numéro de téléphone *" required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Votre message *" required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <?php include "templates/include/footer.php"; ?>

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
