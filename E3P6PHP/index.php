<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 Partie 6 PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>
    <p class="answer"><?php
      if(isset($_GET['dateDebut']) AND isset($_GET['dateFin']))
      {
        echo 'La date de début correspond à : ' . $_GET['dateDebut'] . ' Et la date de fin correspond à : ' . $_GET['dateFin'];
      } else {
        echo 'Les paramètres dates dateDebut et dateFin ne sont pas renseignés!';
      }
    ?></p>
  </body>
</html>
