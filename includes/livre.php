<?php
require "auteur.php";

class livre {
    public $titre;
    public $prix;
    public $resume;
    public $auteur;

    //charger les données du formulaire
    function chargePOST() {
        // le titre
        if (isset($_POST['titre'])) {
        $this->titre = $_POST['titre'];
        } else {
        $this->titre = 'sans nom';
        }
        //prix
        if (isset($_POST['prix'])) {
        $this->prix = $_POST['prix'];
        } else {
        $this->prix = '';
        }
        //le resumer
        if (isset($_POST['resume'])) {
        $this->resume = $_POST['resume'];
        } else {
        $this->resume = ' ';
        }
        //nom de l'auteur
        if (isset($_POST['nom'])) {
        $this->auteur = $_POST['nom'];
        } else {
        $this->auteur = 'sans nom'; 
        }
        //prénom de l'auteur
        if (isset($_POST['prenom'])) {
        $this->auteur = $_POST['prenom'];   
        } else {
        $this->auteur = '';  
        }
        
    }
    // afficher le titre
   public function afficheTitre(){
    echo "<h3>titre : ". $this->titre."</h3>";
   }
   // afficher le prix
   public function affichePrix(){
    echo "<h3>Prix : ". $this->prix."</h3>";
   }
   // afficher le reumser
   public function afficheResume(){
    echo "<p><strong>Resume : </strong>". $this->resume."</p>";
   }
   // fonction pour tout afficher
   public function affiche(){
    $this->afficheTitre();
    $this->affichePrix();
    $this->afficheResume();
    $this->auteur = new Auteur();
    $this->auteur->chargePOST(); // utilise maintenant la vraie variable $_POST
    $this->auteur->affiche();
   }

   // fonction pour modifier
   function setTitrePrixResume($titre, $prix, $auteur, $resume) {
    $this->titre = $titre;
    $this->prix = $prix;
    $this->auteur = $auteur;
    $this->resume = $resume;
   }

   
}


