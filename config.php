<?php
session_start();

// c'est l'url pour accéder à la page d'accueil de mon site.

define("MUSEE_URL_SITE", "http://localhost:8888/formationphp/mon_musee/");
define("MUSEE_PATH_SITE", __DIR__ . "/");

define("URL_TEMPLATE", MUSEE_URL_SITE . "templates/");
// chemin de mon disque dur vers mon template :
define("PATH_TEMPLATE", MUSEE_PATH_SITE . "templates/");

define("NOM_MUSEE", "Le Mini Musée");

function verifier_connexion() {
  if (empty($_SESSION["connexion_ok"])) {
    header("location:connexion.php");
    exit;
  }
}
