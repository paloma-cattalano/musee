<?php

require "../include/config.php";

unset($_SESSION["peut_se_connecter"]);
header ("location:http://localhost:8888/mon_tout_joli_musee/admin/connexion.php");
exit;

 ?>
