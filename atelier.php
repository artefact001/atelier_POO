<?php
// creation de l'interface Reparable
 interface Reparable
 {
    public function reparer();
 }

 //creation de la  Classe Vehicule
class Vehicule{
    // Méthode pour démarrer le véhicule
    public function demarrer()
    {
        echo"le vehicule démarre <br>";
    }
}
/* Classe Voiture héritant de Vehicule et
 implémentant Reparable*/
class Voiture extends Vehicule implements Reparable
{
     // Propriétés privées
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;

    // Constructeur
    public function __construct($marque,$modele,$kilometrage,$annee)
    {
        $this-> marque = $marque;
        $this-> modele = $modele;
        $this-> kilometrage = $kilometrage;
        $this-> annee = $annee;

    }


// Méthodes publiques pour accéder et modifier les propriétés
    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($nouveauMarque)
    {
        $this-> marque = $nouveauMarque;
    }


    public function getModele()
    {
        return $this-> modele;
    }

    public function setModele($nouveauModele)
    {
        $this-> modele = $nouveauModele;
    }


    public function getKilometrage()
    {
        return $this-> kilometrage;
    }


    public function setKilometrage($nouveauKilometrage)
    {
        $this-> kilometrage = $nouveauKilometrage;
    }


    public function getAnnee()
    {
        return $this-> annee;
    }

    public function setAnnee($nouveauAnnee)
    {
        $this-> annee = $nouveauAnnee;
    }
    // Méthode pour afficher les details de la Voiture
    public function Affichage()
    {
        echo "La voiture est de la marque : " .$this->marque . " Son modèle est : " . $this->modele .   ". Elle a un kilométrage de : " . $this->kilometrage . " km. " .  " Et elle est de l'année : " . $this->annee . "<br>";

    }


// Méthode spécifique à la classe Voiture
    public function klaxonner()
    {
        echo"la voiture klaxonne <br>";
    }


 // Méthode de l'interface Reparable
    public function reparer()
    {
        echo" la voiture est en réparation <br>";
    }
   
}



// Classe Moto héritant de Vehicule
class Moto extends Vehicule 
{
      
    
}
// Instanciation d'une voiture
$voiture1  = new Voiture("Toyota", "Corolla", 50000, 2018);

// Affichage des détails de la voiture
$voiture1 -> Affichage();

// Appel de la méthode que la voiture a hérité
$voiture1 ->demarrer();

// Appel de la méthode spécifique à la classe Voiture
$voiture1 ->klaxonner();

$voiture1 -> reparer();

// Instanciation d'une moto
$moto1 = new Moto();

// Démarrage de la moto
$moto1  ->demarrer();
?>