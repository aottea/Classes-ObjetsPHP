<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/livre.php');
    $a = new Livre();
    $a->chargePOST(); 
    $a->affiche();
    

    ?>

    <a href="index.php">Retour à l'acceuil</a>
    
</body>
</html>