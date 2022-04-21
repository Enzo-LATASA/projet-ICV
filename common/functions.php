<?php
     class Voiture {
        //propriétés
        public $marque;
        protected $modele;
        private $annee;
        //…autres propriétes
        //constructeur avec la marque en paramètre
        // function __construct($marqueP, $modeleP)
        // {
        //     $this->marque = $marqueP;
        //     $this->modele = $modeleP;
        // }
        // function __construct($marqueP)
        // {
        //     $this->marque = $marqueP;
        // }
        //les fonctions set et get
        function setMarque($marqueP){
            $this->marque = $marqueP;
        }
        function getMarque() {
            return $this->marque;
        }
        function setModele($Modele){
            $this->modele = $Modele;
        }
        function getModele() {
            return $this->modele;
        }
        function setAnnee($Annee){
            $this->annee = $Annee;
        }
        function getAnnee() {
            return $this->annee;
        }
    }
    class Utilisateur {
        public $identifiant;
        function __construct($identifiantP)
        {
            $this->identifiant = $identifiantP;
        }
        function getIdentifiant() {
            return $this->identifiant;
        }
        function getMessageConnexion() {
            return '<p>Bienvenue' . ' ' .$this->getIdentifiant(). '</p>';
        }
    }  


    function formatDateBD($dateBDP) {
        $date = new DateTime($dateBDP);
        return $date->format("d/m/Y");
    }

?>