<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4 Partie 6</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP</p>
    <p class="answer"><?php
      if(isset($_GET['langage']) AND isset($_GET['serveur']))
      {
        echo 'Le langage est : ' . $_GET['langage'] . ' Le serveur est : ' . $_GET['serveur'];
      } else {
        echo 'Les paramètres d\'url ne sont pas renseignés';
      }
    ?></p>
  </body>
</html>
