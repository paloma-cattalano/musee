<?php

session_start();

$nom_du_musee = "Le tout joli musée";

$_dossier_template = "templates/";

$_url_base = "http://localhost:8888/mon_tout_joli_musee/";


function verif_connexion(){
if(empty ($_SESSION["peut_se_connecter"])) {
  header ("location:admin.php");
}
}

// verif_connexion();

 ?>
