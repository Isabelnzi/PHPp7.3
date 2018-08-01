<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
   <?php
    if(isset($_GET['firstname']) && isset($_GET['lastname'])) {
        // afficher le retour de la fonction
        echo 'Bonjour, ' . ($_GET['firstname']) . ' ' . ($_GET['lastname']);
      }
    ?>
  </body>
</html>
