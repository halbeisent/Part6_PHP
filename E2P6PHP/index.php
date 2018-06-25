<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 Partie 6</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p class="rule">Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean</p>
    <p class="answer"><?php echo 'Nom : ' . $_GET['nom'] . 'Prénom : ' . $_GET['prenom'];
    if(isset($_GET['age']))
    {
    echo $_GET['age'];
  } else { ?>
    <?= ' Le paramètre âge n\'est pas renseigné!';
  } ?></p>
  </body>
</html>
