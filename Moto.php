                <?php

                require_once"Vehicule.php";

                // Classe Moto héritant de Vehicule
                class Moto extends Vehicule
                {
                // Propriétés privées
                private $marque;
                private $modele;
                private $annee;
                private $kilometrage;

                // Constructeur
                public function __construct($marque, $modele, $kilometrage, $annee)
                {
                $this-> marque= $marque;
                $this-> modele= $modele;
                $this-> kilometrage= $kilometrage;
                $this-> annee= $annee;
                }
                // Méthodes publiques pour accéder et modifier les propriétés
                public function getMarque()
                {
                return $this->marque;
                }
                public function setMarque($nouveauMarque)
                {
                $this-> marque= $nouveauMarque;
                }
                public function getModele()
                {
                return$this-> modele;
                }
                public function setModele($nouveauModele)
                {
                $this-> modele= $nouveauModele;
                }
                public function getKilometrage()
                {
                return$this-> kilometrage;
                }
                public function setKilometrage($nouveauKilometrage)
                {
                $this-> kilometrage= $nouveauKilometrage;
                }
                public function getAnnee()
                {
                return$this-> annee;
                }
                public function setAnnee($nouveauAnnee)
                {
                $this-> annee= $nouveauAnnee;
                }
                // Méthode pour afficher les details de la Voiture
                public function Affichage()
                {
                echo"La moto est de la marque : ".$this->marque. " Son modèle est : ". $this->modele. ". Elle a un kilométrage de : ". $this->kilometrage. " km. ". " Et elle est de l'année : ". $this->annee. "<br>";
                }
                // Méthode pour démarrer le véhicule
                public function demarrer()
                {
                echo"la moto démarre <br>";
                }

                }
                // Instanciation d'une moto
                $moto1= new Moto("X9", "YAMAHA", 1200, 2004);
                // Affichage des détails de la voiture
                $moto1-> Affichage();

                // Démarrage de la moto
                $moto1->demarrer();

