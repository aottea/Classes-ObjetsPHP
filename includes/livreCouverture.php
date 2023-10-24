<?php

class LivreCouverture extends livre{
    public $image;

   function setImage($image)
   {
    $this->image = $image;
   }

   public function afficheCouverture(){
    echo "<img src='../img/" . $this->image . "' alt='couverture'>";
   }

   public function affiche(){
    $this->afficheTitre();
    $this->afficheCouverture();
    $this->affichePrix();
    $this->auteur->affiche();
    $this->afficheResume();
   }

   
}


