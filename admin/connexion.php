
<?php

include "../include/config.php";
include "../include/header.php";


?>

<link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/admin.css" />
<link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/page.css" />






    <form class="form_connect" method="post" action="verif_connexion.php" >

      Identifiant : <input class="btn_connexion" type="text" name="identifiant"><br>
      Mot de passe : <input class="btn_connexion" type="text" name="mdp"><br>

      <button class="btn_connexion" type="submit" name="button">Valider</button>

    </form>
