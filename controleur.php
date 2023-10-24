<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<li><a href="controleur.php?page=auteur&action=read">Affichage des auteurs</a></li>
<li><a href="controleur.php?page=auteur&action=read&id=4">Affichage d'un auteur</a></li>
<li><a href="controleur.php?page=auteur&action=new">Création d'un auteur</a></li>
<li><a href="controleur.php?page=auteur&action=delete&id=1">Suppression de l'auteur 1</a></li>
<li><a href="controleur.php?page=editeur&action=read&id=1">Affichage de l'éditeur </a></li>
<li><a href="controleur.php?page=editeur&action=exec">Fausse action sur les éditeurs</a></li>
<li><a href="controleur.php?page=xxx">Page inexistante</a></li>
</ul>

<?php

require('../tp1/includes/auteur.php');

// récupération de la variable page sur l'URL
if (isset($_GET['page'])) $page = $_GET['page']; else $page = '';
 
// récupération de la variable action sur l'URL
if (isset($_GET['action'])) $action = $_GET['action']; else $action = 'read';
 
// récupération de l'id s'il existe (par convention la clé 0 correspond à un id inexistant)
if (isset($_GET['id'])) $id = intval($_GET['id']); else $id = 0;
 
// test des différents choix
switch ($page) {
  case 'auteur' :
    switch ($action) {
      case 'read' :
        if ($id > 0) {
            $auteur = auteur::readOne($id);
            $auteur->affiche();
          }
          else {
            $tableau = auteur::readAll();
            foreach ($tableau as $auteur) $auteur->affiche();
          }
          break;
      case 'new':
        echo'<form action="controleur.php?page=auteur&action=create"  method="post">
    <input type="text" name="nom" placeholder="Saisir un nom">
    <input type="text" name="prenom" placeholder="Saisir un prénom">
    <input type="submit" value="Envoyer">
    </form>';
    break;
        case 'create' :
        //On crée un objet vide
        $auteur = new Auteur();
        $auteur->chargePOST(); 
        $auteur->affiche();
         
        // On exécute la requête
        $auteur->create();
         
        // On vérifie si la clé a été mise à jour
        echo 'Nouvel Id : '.$auteur->id;
        
      break;
      case 'delete' :
        // suppression de l'auteur
        auteur::delete($id);
        // premier choix : un message
        //echo 'Suppression de l\'auteur '.$id;
        // autre choix : redirection vers l'affichage des auteurs pour provoquer un rechargement de la page
        header('Location: controleur.php?page=auteur');
        break;
      default :
        echo 'Action non reconnue';
    }
    break;
  case 'editeur' :
    echo '<h1>Page éditeur</h1>';
    switch ($action) {
      case 'read' :
        echo 'Affichage de l\'éditeur';
      break;
      default :
        echo 'Action non reconnue';
    }
    break;
  default :
    echo '<h1>Page d\'erreur ou page d\'accueil</h1>';
}

?>

</body>
</html>