<?php

    class Piece extends Contenant{
        private $nbMeublesMaxi;
        private $nbMeubles;
        private $tabMeubles;

        /**
         * Constructeur pour la classe Piece
         *
         * @param string $nom
         * @param integer $largeur
         * @param integer $hauteur
         * @param integer $profondeur
         * @param integer $nbMeublesMaxi
         * @param array $tabMeubles
         */
        public function __construct(string $nom, int $largeur, int $hauteur, int $profondeur,int $nbMeublesMaxi, array $tabMeubles = []){
            parent::__construct($nom, $largeur, $hauteur, $profondeur);
            $this->setNbMeublesMaxi($nbMeublesMaxi);
            $this->setTabMeubles($tabMeubles);
        }
        /**
         * Ajout d'un meuble au niveau du tableau $tabMeubles
         *
         * @param Meuble $meuble
         * @return void
         */
        public function ajouterMeuble(Meuble $meuble){
            if ($this->getSurfaceLibre()>=$meuble->getSurface()){
                $tempTab = $this->tabMeubles;
                $tempTab[] = $meuble;
                $this->setTabMeubles($tempTab);
            } else throw new Exception ("Il n'y a pas assez d'espace dans la pièce");
        }

        /**
         * Affiche le détail de la pièce
         *
         * @return void
         */
        public function affiche(){
            echo $this->__toString();
        }

        /**
         * Calcule la surface utilisée par les meubles dans la pièce
         *
         * @return integer
         */
        public function getSurfaceMeubles():int {
            $surfaceMeubles = 0;
            foreach ($this->tabMeubles as $meuble) {
                $surfaceMeubles+=$meuble->getSurface();
            }
            return $surfaceMeubles;
        }
        /**
         * Calcule la surface libre dans la pièce
         *
         * @return integer
         */
        public function getSurfaceLibre():int {
            return $this->getSurface()-$this->getSurfaceMeubles();
        }

        /**
         * Convertie les données en chaine de caractère
         *
         * @return string
         */
        public function __toString():string{
            
            $meubleToString = "";
                        foreach ($this->tabMeubles as $meuble) {
                            $meubleToString.=$meuble."</br>\n";
                        }
            $pieceTostring = 
                    "Nb Max de la meuble dans la pièce: ".$this->nbMeublesMaxi.",</br>\n".
                    "Nb de meubles dans la pièce: ".$this->nbMeubles.",</br></br>\n";
                    
            if (count($this->tabMeubles)> 0){
                $pieceTostring.="Détail des meubles dans la pièce $this->nom: </br>\n".$meubleToString."</br>\n";
            }
            return parent::__toString().$pieceTostring;
        }

        

        //------------ ACCESSEURS 
        /**
         * Get the value of nbMeublesMaxi
         */
        public function getNbMeublesMaxi()
        {
                return $this->nbMeublesMaxi;
        }

        /**
         * Set the value of nbMeublesMaxi
         */
        private function setNbMeublesMaxi($nbMeublesMaxi): self
        {
            //Controler la longueur du tableau par rapport à la capacité max de la pièce en meuble
            if (($this->tabMeubles == null) or count($this->tabMeubles)<=$nbMeublesMaxi){
                $this->nbMeublesMaxi = $nbMeublesMaxi;
                return $this;
            } else throw new Exception ("TOTO le champs nbmeublesMaxi dans la pièce est inférieur au tableau tabMeubles");
        }

        /**
         * Get the value of nbMeubles
         */
        public function getNbMeubles()
        {
                return $this->nbMeubles;
        }

        /**
         * Set the value of nbMeubles
         */
        private function setNbMeubles($nbMeubles): self
        {
                $this->nbMeubles = $nbMeubles;

                return $this;
        }

        /**
         * Get the value of tabMeubles
         */
        public function getTabMeubles()
        {
                return $this->tabMeubles;
        }

        /**
         * Set the value of tabMeubles
         */
        public function setTabMeubles($tabMeubles): self
        {
            //Controler la longueur du tableau par rapport à la capacité max de la pièce en meuble
            if (count($tabMeubles)<=$this->nbMeublesMaxi){
                $this->setNbMeubles(count($tabMeubles));
                $this->tabMeubles = $tabMeubles;
                return $this;
            } else throw new Exception ("le champs nbmeublesMaxi dans la pièce est inférieur au tableau tabMeubles");
                
        }
    }