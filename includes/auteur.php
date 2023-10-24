<?php
require('includes/connexion.php');

class auteur{
    public $id;
    public $nom;
    public $prenom;

    // chargé les données du formulaire de l'auteur
    function chargePOST() {
        // Nom 
        if (isset($_POST['nom'])) {
        $this->nom = $_POST['nom'];
        } else {
        $this->nom = 'sans nom';
        }
        //prénom
        if (isset($_POST['prenom'])) {
        $this->prenom = $_POST['prenom'];
        } else {
        $this->prenom = ''; 
        }
    }

  

   public function affiche(){
    echo "<h4>Auteur : ". $this->nom." ". $this->prenom."</h4>";
   }

   static function readAll() {
    // définition de la requête SQL
    $sql= 'select * from auteur';
 
    // connexion
    $pdo = connexion();
 
    // préparation de la requête
    $query = $pdo->prepare($sql);
 
    // exécution de la requête
    $query->execute();
 
    // récupération de toutes les lignes sous forme d'objets
    $tableau = $query->fetchAll(PDO::FETCH_CLASS,'Auteur');
 
    // retourne le tableau d'objets
    return $tableau;
  }

  static function readOne($id) {
    // définition de la requête SQL avec un paramètre :valeur
    $sql= 'select * from auteur where id = :valeur';
 
    // connexion à la base de données
    $pdo = connexion();
 
    // préparation de la requête
    $query = $pdo->prepare($sql);
 
    // on lie le paramètre :valeur à la variable $id reçue
    $query->bindValue(':valeur', $id, PDO::PARAM_INT);
 
    // exécution de la requête
    $query->execute();
 
    // récupération de l'unique ligne
    $objet = $query->fetchObject('Auteur');
 
    // retourne l'objet contenant résultat
    return $objet;
  }

  function create() {
    // construction de la requête :nom, :prenom sont les valeurs à insérées
    $sql = 'INSERT INTO auteur (nom, prenom) VALUES (:nom, :prenom);';
 
    // connexion à la base de données
    $pdo = connexion();
 
    // préparation de la requête
    $query = $pdo->prepare($sql);
 
    // on donne une valeur aux paramètres à partir des attributs de l'objet courant
    $query->bindValue(':nom', $this->nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $this->prenom, PDO::PARAM_STR);
 
    // exécution de la requête
    $query->execute();
 
    // on récupère la clé de l'auteur inséré
    $this->id = $pdo->lastInsertId();

  }

  function modifier($nom,$prenom){
    $this->nom = $nom;
    $this->prenom = $prenom;
}

static function delete($id) {
    // construction de la requête :nom, :prenom sont les valeurs à insérées
    $sql = 'DELETE FROM auteur WHERE id = :id;';
 
    // connexion à la base de données
    $pdo = connexion();
 
    // préparation de la requête
    $query = $pdo->prepare($sql);
 
    // on lie le paramètre :id à la variable $id reçue
    $query->bindValue(':id', $id, PDO::PARAM_INT);
 
    // exécution de la requête
    $query->execute();
  }

  function update() {
    // construction de la requête :nom, :prenom sont les valeurs à insérées
    $sql = 'UPDATE auteur SET nom = :nom , prenom = :prenom WHERE id = :id;';
 
    // connexion à la base de données
    $pdo = connexion();
 
    // préparation de la requête
    $query = $pdo->prepare($sql);
 
    // on donne une valeur aux paramètres à partir des attributs de l'objet courant
    $query->bindValue(':id', $this->id, PDO::PARAM_INT);
    $query->bindValue(':nom', $this->nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $this->prenom, PDO::PARAM_STR);
 
    // exécution de la requête
    $query->execute();
  }
   
}


