<?php

require "../config.php";
include "../templates/include/navigation.php";

//fonction définie dans config.php, sert à sécuriser la page admin (à vérifier que les id sont ok)
verifier_connexion();

// envoi du texte :
$fichier = fopen("fichiers_recus/textes/mon_fichier_texte.txt", "w+");

if (isset($_POST["mon_texte"])) {
  fwrite($fichier, "<p>" . $_POST["mon_texte"] . "</p>");
}

fclose($fichier); // est à l'extérieur des {} parce que fopen est aussi à l'extérieur
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $nom_du_musee . " | Espace admin" ?></title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;600;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $_url_base . $_dossier_template ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">


    <h1>Bienvenue dans votre espace admin</h1>

    <a href="deconnexion.php">Se déconnecter</a>

    <h2>Page Accueil</h2>

    <div class="admin-form">

      <!-- va appeler la page admin_reponse plutôt que s'appeler elle-même -->
      <form enctype="multipart/form-data" class="" action="admin_reponse.php" method="post">

        <p>Chargez votre texte :</p>
        <input name="nomChamp" type="text">

        <hr>

        <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
        Envoyer ce fichier (2 Mo max): <input name="userfile" type="file"/>
        <button><input type="submit" name="Envoyer le fichier"/></button>

      </form>

    </div>

    <?php

    // je vérifie que mon fichier n'est pas vide, s'il n'est pas vide et que mon fichier n'a pas d'erreur
    if(!empty($_FILES["mon_fichier"]) && $_FILES["mon_fichier"]["error"] == 0 ) {
        // = Si j'ai envoyé un fichier et que ce fichier n'a pas d'erreur

        // Je choisis le nom du dossier dans lequel je veux placer le fichier envoyé
        $nom_dossier_destination = "fichiers_recus/fichiers";

        // Je fabrique le chemin de destination de mon nouveau fichier
        $chemin_dossier_destination = __DIR__ .  "/" . $nom_dossier_destination;
        $chemin_fichier_destination = $chemin_dossier_destination . "/" . "accueil.jpg";

        // Je bouge mon fichier du repertoire temporaire ("tmp_name") jusque dans mon répertoire de destination
        // et je modifie son nom
        move_uploaded_file($_FILES["mon_fichier"]["tmp_name"], $chemin_fichier_destination); // lien vers le fichier tmp

        // Je construits le lien vers le fichier que je viens d'envoyer sur le serveur
        echo "<a href='" . $nom_dossier_destination . "/" . $_FILES['mon_fichier']['name'] . "' target='_blank'>Mon fichier envoyé se trouve à l'URL suivante : </a>";
    }

    ?>

    <div class="resultat_mon_texte">
      <?php
      // s'il y a du texte envoyé par le formulaire, écrit le texte sur l'espace admin
      if (isset($_POST["mon_texte"])) {
        echo $_POST["mon_texte"];
      }
      echo "<hr>";

      // Texte écrit dans le fichier txt :
      if (is_file("fichiers_recus/textes/mon_fichier_texte.txt")) {
        $contenuFichier = file_get_contents("fichiers_recus/textes/mon_fichier_texte.txt");
      } else {
        echo "ATTENTION - <br> <strong>fichiers_recus/textes/mon_fichier_texte.txt</strong> : ce fichier n'existe pas";
      }
      ?>

    </div>


    <?php include "../templates/include/footer.php" ?>
  </body>
</html>
