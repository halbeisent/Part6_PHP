<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5 Partie 6 PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12</p>
    <p class="answer"><?php
      if(isset($_GET['semaine']))
        {
          echo 'Le numéro de semaine est le : ' . $_GET['semaine'];
        } else {
          echo 'Les paramètres d\'url ne sont pas renseignés';
        }
    ?></p>
  </body>
</html>
