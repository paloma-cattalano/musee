<?php

include "../include/config.php";
include "../include/header.php";


?>


      <!DOCTYPE html>
      <html lang="fr" dir="ltr">
      <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/admin.css" />
      <link rel="stylesheet" href="<?php echo $_url_base . $_dossier_template ?>css/page.css" />
      



    <div class="espace_arnaque">


      <h1>🎉Bienvenue sur la page hyper sécurisée!🎉</h1>
      <h2>🎀Vous pouvez dès à présent m'envoyer vos coordonnées bancaires🎀</h2>


       <form class="" method="post" action="deconnexion.php" >

         <button type="submit" name="button">Deconnexao totale</button>

       </form>

    </div>


    <form class="" action="admin.php" method="post" enctype="multipart/form-data">

      <p>Votre texte : </p>

       <textarea name="mon_texte" type="text" rows="10" cols="33"></textarea>


          <?php

           if(!empty($_POST["mon_texte"])) {

             $file = fopen("inscription.txt", "a+");

             fwrite($file, $_POST["mon_texte"] . PHP_EOL);

             fclose($file);
           }

          ?>


       <p>Votre image : </p>

       <input type="file" name="mon_image" value="">

       <button type="submit" name="button">Envoyez-donc la purée!</button>

     </form>


       <?php




        if(!empty($_FILES["mon_image"]) && $_FILES["mon_image"]["error"] == 0) {

          $nom_dossier_destination = "../templates/images";
          // je fabrique le chemin de destination de ce nouveau fichier image :
          $chemin_dossier_destination = __DIR__ . "/" . $nom_dossier_destination;
          $chemin_fichier_destination = $chemin_dossier_destination . "/" . $_FILES["mon_image"]["name"];

        move_uploaded_file($_FILES["mon_image"]["tmp_name"], $chemin_fichier_destination);
        }

        ?>
