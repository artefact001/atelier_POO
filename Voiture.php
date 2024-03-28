<?php
require_once"Reparable.php";
require_once"Vehicule.php";

/* Classe Voiture héritant de Vehicule et
implémentant Reparable*/
classVoitureextendsVehiculeimplementsReparable
{
// Propriétés privées
private$marque;
private$modele;
private$kilometrage;
private$annee;
// Constructeur
publicfunction__construct($marque,$modele,$kilometrage,$annee)
{
$this-> marque= $marque;
$this-> modele= $modele;
$this-> kilometrage= $kilometrage;
$this-> annee= $annee;
}
// Méthodes publiques pour accéder et modifier les propriétés
publicfunctiongetMarque()
{
return$this->marque;
}
publicfunctionsetMarque($nouveauMarque)
{
$this-> marque= $nouveauMarque;
}
publicfunctiongetModele()
{
return$this-> modele;
}
publicfunctionsetModele($nouveauModele)
{
$this-> modele= $nouveauModele;
}
publicfunctiongetKilometrage()
{
return$this-> kilometrage;
}
publicfunctionsetKilometrage($nouveauKilometrage)
{
$this-> kilometrage= $nouveauKilometrage;
}
publicfunctiongetAnnee()
{
return$this-> annee;
}
publicfunctionsetAnnee($nouveauAnnee)
{
$this-> annee= $nouveauAnnee;
}
// Méthode pour afficher les details de la Voiture
publicfunctionAffichage()
{
echo"La voiture est de la marque : ".$this->marque. " Son modèle est : ". $this->modele. ". Elle a un kilométrage de : ". $this->kilometrage. " km. ". " Et elle est de l'année : ". $this->annee. "<br>";
}
// Méthode pour démarrer le véhicule
publicfunctiondemarrer()
{
echo"la voiture démarre <br>";
}
// Méthode spécifique à la classe Voiture
publicfunctionklaxonner()
{
echo"la voiture klaxonne <br>";
}
// Méthode de l'interface Reparable
publicfunctionreparer()
{
echo" la voiture est en réparation <br>";
}
}
// Instanciation d'une voiture
$voiture1= newVoiture("Toyota", "Corolla", 50000, 2018);

// Affichage des détails de la voiture
$voiture1-> Affichage();

// Appel de la méthode que la voiture a hérité
$voiture1->demarrer();

// Appel de la méthode spécifique à la classe Voiture
$voiture1->klaxonner();

$voiture1-> reparer();
