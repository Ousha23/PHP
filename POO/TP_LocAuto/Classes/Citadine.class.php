<?php
    class Citadine extends Vehicule {
        //Donnée membre
        private $autonomie;
        /**
         * Constructeur Citadine
         *
         * @param string $marque
         * @param integer $id
         * @param string $modele
         * @param integer $autonomie
         */
        public function __construct(string $marque, int $id, string $modele, int $autonomie){
            parent::__construct($marque, $id, $modele);
            $this->setAutonomie($autonomie);
        }
        /**
         * Planifier les conditions de révision
         *
         * @return void
         */
        // ------------------ METHODES
        public function planifierRevision(){
            //TODO
            echo "abstract vide C";
        }
        /**
         * Récup l'id
         *
         * @return string
         */
        public function getIdentifiant():string{
            return $this->id; 
        }
        /**
         * Récup toutes les infos
         *
         * @return string
         */
        public function getInfosCompletes():string{
            return $this->__toString();
        }
        public function __toString():string {
            return parent::__toString().
                    "Autonomie :".$this->autonomie."\n";
        }


        // ------------------ SELECTEURS/SETTERS - ACCESSEURS
        /**
         * Set the value of autonomie
         */
        public function setAutonomie($autonomie): self
        {
                $this->autonomie = $autonomie;

                return $this;
        }
    }
?>