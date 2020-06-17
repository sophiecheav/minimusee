<?php
session_start();

//
// var_dump($_POST);
// exit;
if (isset($_POST["id"]) &&
    isset($_POST["password"]) &&
    // puis que ce sont les bons id
    $_POST["id"] == "admin" &&
    $_POST["password"] == "admin") {

      // je crée une variable de session en lui donnant la valeur qu'on veut - on lui donne une valeur pour qu'elle existe : on lui dit si est TRUE, j'ai le droit de me connecter, donc si est FALSE, je n'ai pas le droit
      $_SESSION["connexion_ok"] = TRUE;
      // $_SESSION["emailadmin"] = $_POST["id"]; //permet d'afficher l'identifiant de l'utilisateur connecté dans l'espace admin

      header("location:espace_admin.php");
      exit;

  } else {
    echo "Identifiant et/ou mot de passe incorrect";
    header("location:connexion.php");
}

?>
