<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//taper localhost/INFO3/tp2 dans bar de recherche pour accéder au fichier 
include('include/connexion.php');
include('../includes/auteur.php');

$pdo=connexion();

echo'<h1>ReadAll</h1>';
//fabrication et récupération de tous les objets en une fois
$tableau = Auteur::readAll();

//utilisation d'une boucle pour afficher les objets
foreach ($tableau as $auteur){
    $auteur->affiche();
}

echo'<h1>ReadOne</h1>';
// récupération de l'auteur d'identifiant 1
$auteur = Auteur::readOne(2);
 
// affichage du résultat
$auteur->affiche();

echo'<h1>create</h1>';
// On crée un objet vide
$auteur = new Auteur();
 
// On lui donne des valeurs
$auteur->modifier('Victor', 'Hugo');
 
// On exécute la requête
$auteur->create();
 
// On vérifie si la clé a été mise à jour
echo 'Nouvel Id : '.$auteur->id;

echo'<h1>delete</h1>';
// On suppose qu'on a défini une valeur pour la clé
$id = 8;
 
// On appelle la méthode statique avec cette clé
Auteur::delete($id);

echo'<h1>update</h1>';

// On suppose qu'on a défini une valeur pour la clé
$cle = 13; //changer id ?
 
// On récupère un auteur existant dans un objet
$auteur = Auteur::readOne($cle);
 
// On modifie ses attributs (mais pas la clé)
$auteur->modifier('Victor', 'Hugo modifié');
 
// On exécute la requête de mise à jour
$auteur->update();
?>    
</body>
</html>