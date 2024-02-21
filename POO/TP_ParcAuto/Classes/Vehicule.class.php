<?php
    abstract class Vehicule {
        private $marque;
        private $modele;

        /**
         * Constructeur de la class Vehicule
         *
         * @param string $marque
         * @param string $modele
         */
        public function __construct(string $marque, string $modele){
            $this->setMarque($marque);
            $this->setModele($modele);
        }

        //------------Méthodes --------------
        abstract public function demarrer():bool;

        abstract public function arreter();
        
        abstract public function faireLePlein(float $volume);

        /**
         * Set the value of marque
         */
        public function setMarque($marque): self
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Set the value of modele
         */
        public function setModele($modele): self
        {
                $this->modele = $modele;

                return $this;
        }
    }