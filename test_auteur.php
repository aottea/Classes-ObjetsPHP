<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "includes/auteur.php"; ?>
    <?php

    // Pour tester la simulation de formulaire

    $_POST = ['nom' => 'John', 'prenom' => 'Doe'];
    $auteur1 = new Auteur(); // Utilisez "Auteur" avec une majuscule, comme dans la classe
    $auteur1->chargePOST();
    $auteur1->affiche();

?>
    
</body>
</html>