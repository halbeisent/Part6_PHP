<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6 Partie 6 PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101</p>
    <p class="answer"><?php
      if(isset($_GET['batiment']) AND isset($_GET['salle']))
        {
          echo 'Vous êtes dans le batiment n° ' . $_GET['batiment'] . ' dans la salle ' . $_GET['salle'];
        } else {
          echo 'Les paramètres d\'url ne sont pas renseignés!';
        }
    ?></p>
  </body>
</html>
