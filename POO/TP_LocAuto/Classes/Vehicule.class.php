<?php
    abstract class Vehicule implements Inventoriable {
         //Donnée membre
        protected $marque;
        protected $id;
        protected $modele;

        /**
         * Constructeur de la classe Vehicule
         *
         * @param string $marque
         * @param integer $id
         * @param string $modele
         */
        public function __construct(string $marque, int $id, string $modele){
            $this->setMarque($marque);
            $this->setID($id);
            $this->setModele($modele);

        }

        // ------------------ METHODES
        
        abstract public function planifierRevision();

        abstract public function getIdentifiant():string;

        abstract public function getInfosCompletes():string;

        /**
         * toString convertir les données en chaine de caractère
         *
         * @return string
         */
        public function __toString():string {
            return "Marque : ".$this->marque.",\n".
                    "Identifiant : ".$this->id.",\n".
                    "Modèle : ".$this->modele."\n";
        }

        // ------------------ SELECTEURS/SETTERS - ACCESSEURS
        /**
         * Set the value of marque
         */
        public function setMarque($marque): self
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

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
?>