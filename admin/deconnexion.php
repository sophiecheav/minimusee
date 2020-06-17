<?php
  session_start();
  
    // unset = détruit cette variable de session
    unset($_SESSION["connexion_ok"]);  //cette variable existe toujours sur toutes les pages et là je la vide, elle n'existe plus qd j'arriverai sur la page connexion
    header("location:connexion.php");
    exit;
?>
