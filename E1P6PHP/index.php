<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 Partie 6</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean</p>
    <!-- On récupère les paramètres d'URL via un $_GET -->
    <p class="answer"><?= 'Nom : ' . $_GET['nom'] . ' Prénom : ' . $_GET['prenom']; ?></p>
  </body>
</html>
