<?php

include "../config.php";

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?php echo NOM_MUSEE . " | Accueil" ?></title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;900&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/styles.css"/>
    </head>

    <body id="page-top">

<!-- presentation-->
    <section class="page-section ivorycolor-bg">
      <div class="container">
        <div class="text-center">

          <h2 class="section-heading text-uppercase"><?php echo NOM_MUSEE ?></h2>
          <h3 class="section-subheading text-muted">Connexion</h3>

<!-- formulaire connexion -->
          <form class="connect-form" method="post" action="verifier_login.php" >

            <div class="">
              <label for="id">Votre identifiant</label>
              <input type="text" name="id" value="">
            </div>

            <div class="">
              <label for="password">Mot de passe</label>
              <input type="password" name="password" value="">
            </div>

            <div class="connect-btn">
              <button type="submit" name="button">Valider</button>
            </div>
          </form>

        </div>
      </div>
    </section>

<?php include "../templates/include/footer.php" ?>

  </body>
</html>
