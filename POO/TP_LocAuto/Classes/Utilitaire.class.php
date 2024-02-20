<?php
    class Utilitaire extends Vehicule {
        //Donnée membre
        private $chargeUtile;
        /**
         * Constucteur class Utilitaire
         *
         * @param string $marque
         * @param integer $id
         * @param string $modele
         * @param integer $chargeUtile
         */
        public function __construct(string $marque, int $id, string $modele, int $chargeUtile){
            parent::__construct($marque, $id, $modele);
            $this->setChargeUtile($chargeUtile);
        }
        // ------------------ METHODES
        public function planifierRevision(){
            echo "abstract vide U";
        }

        public function getIdentifiant():string{
            return $this->id; 
        }

        public function getInfosCompletes():string{
            return $this->__toString();
        }
        
        /**
         * convertir les données en chaine de caractère
         *
         * @return string
         */
        public function __toString():string {
            return parent::__toString().
                    "Charge utile :".$this->chargeUtile."\n";
        }


        // ------------------ SELECTEURS/SETTERS - ACCESSEURS
        /**
         * Set the value of chargeUtile
         
        */
        public function setChargeUtile($chargeUtile): self
        {
                $this->chargeUtile= $chargeUtile;

                return $this;
        }

    }
?>