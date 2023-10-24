<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/auteur.php');
    $auteur = new Auteur();
    $auteur->chargePOST(); 
    $auteur->affiche();

    ?>

    <a href="index.php">Retour à l'acceuil</a>
    
</body>
</html>