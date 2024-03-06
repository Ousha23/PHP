<?php
    class Meuble extends Contenant {

        /**
         * Constructeur de la classe Meuble
         *
         * @param string $nom
         * @param integer $largeur
         * @param integer $hauteur
         * @param integer $profondeur
         */
        public function __construct(string $nom, int $largeur, int $hauteur, int $profondeur){
            parent::__construct($nom,$largeur,$hauteur,$profondeur); 

        }
        //------------------- METHODES
        
        /**
         * Affiche le détail du meuble
         *
         * @return void
         */
        public function affiche(){
                echo $this->__toString();
        }
        /**
         * Converti les info du meuble en chaine de caractère
         *
         * @return string
         */
        public function __toString():string{
            return parent::__toString();
        }
        
    }