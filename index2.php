<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice class et objet</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<a href="tp2/test.php">tp2</a>
<?php require "includes/livre.php"; ?>
<?php require "includes/livreCouverture.php"; ?>


<div class="livre">
<?php
echo '<div class="article">';



$b = new Auteur();
$a = new livre("teste", 15, $b, "teste");

$c = new LivreCouverture();
$c->setTitrePrixResume("teste", 15, $b, "teste");
$c->setImage('hungergames.jpg');
$c->affiche();



echo '</div>';


?>

<a href="saisi_auteur.php">Ajout un auteur</a>
<a href="saisi_livre.php">Ajout un livre</a>
</div>
    
</body>
</html>