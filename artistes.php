<?php
 include "templates/include/head.php";
?>

        <!-- Masthead-->
        <header class="masthead-artistdetail">
            <div class="container">
                <div class="masthead-heading text-lg-right text-uppercase dark-gray">Nos artistes</div>
                <div class="masthead-subheading text-lg-right dark-gray">Recherchez par nom, catégorie...</div>

                <div class="input-group select-bar">
                  <select class="custom-select" id="inputGroupSelect04">
                    <option selected>Catégorie...</option>
                    <option value="1">Illustrateur•ice</option>
                    <option value="2">Peintre</option>
                    <option value="3">Photographe</option>
                    <option value="4">Sculpteur•ice</option>
                    <option value="5">Street artiste</option>
                  </select>
                  <div class="input-group-append">
                    <input class="name-input" id="name" type="name" placeholder="Nom de l'artiste..."/>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">Rechercher</button>
                  </div>
                </div>

            </div>
        </header>

        <section class="page-section ivorycolor-bg" id="services">
          <div class="container">
            <div class="text-center">
              <h2 class="section-heading text-uppercase">Frida Kahlo</h2>
              <h3 class="section-subheading text-muted">Auto-portrait avec un collier d'épines (1940)</h3>
              <img src="templates/img/FridaKahlo_Autoportrait.jpg" alt="photo oeuvre Autoportrait de Frida Kahlo">
              <p class="annotation">Magdalena Frida Carmen Kahlo Calderón1 ou Frida Kahlo, née le 6 juillet 1907 dans une démarcation territoriale de l'actuelle entité fédérative de Mexico, la délégation de Coyoacán, et morte le 13 juillet 1954 au même endroit, est une artiste peintre mexicaine.</p>
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
