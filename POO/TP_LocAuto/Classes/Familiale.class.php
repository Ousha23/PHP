<?php
    class Familiale extends Vehicule {
        //Donnée membre
        private $nbrPassengers;
        /**
         * Constructeur class Familiale
         *
         * @param string $marque
         * @param integer $id
         * @param string $modele
         * @param integer $nbrPassengers
         */
        public function __construct(string $marque, int $id, string $modele, int $nbrPassengers){
            parent::__construct($marque, $id, $modele);
            $this->setNbrPassengers($nbrPassengers);
        }
        // ------------------ METHODES
        /**
         * Methode pour planifier la révision 
         *
         * @return void
         */
        public function planifierRevision(){
            //TODO
            echo "Il faut planifier une révision pour ma familiale";
         }
        /**
         * Récupérer l'ID
         *
         * @return string
         */
        public function getIdentifiant():string{
            return $this->id; 
        }
        /**
         * Récupérer toutes les infos
         *
         * @return string
         */
        public function getInfosCompletes():string{
            return $this->__toString();
        }
        /**
         * Convertir en chaine de caractère
         *
         * @return string
         */
        public function __toString():string {
            return parent::__toString().
                    "Nombre de passagers Max :".$this->nbrPassengers."\n";
        }


        // ------------------ SELECTEURS/SETTERS - ACCESSEURS
        /**
         * Set the value of nbrPassengers
         
        */
        public function setNbrPassengers($nbrPassengers): self
        {
                $this->nbrPassengers= $nbrPassengers;

                return $this;
        }
    }
?>
