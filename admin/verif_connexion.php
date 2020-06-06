<?php

require "../include/config.php";

verif_connexion();


if (
isset($_POST["identifiant"]) &&
isset($_POST["mdp"]) &&
$_POST["identifiant"] == "DESCODEUSES" &&
$_POST["mdp"] == "PHP2020" ) {

$_SESSION["peut_se_connecter"] = TRUE;
header ("location:admin.php");
} else {
header ("location:connexion.php");
exit;
}

 ?>
