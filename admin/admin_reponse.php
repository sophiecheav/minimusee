<?php
require "config.php";
verif_connexion();

// envoi du texte :
$fichier = fopen("fichiers_recus/textes/mon_fichier_texte.txt", "w+");

if (isset($_POST["mon_texte"])) {
  fwrite($fichier, "<p>" . $_POST["mon_texte"] . "</p>");
}

fclose($fichier); // est à l'extérieur des {} parce que fopen est aussi à l'extérieur


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
}

header("location:admin.php");
exit;
