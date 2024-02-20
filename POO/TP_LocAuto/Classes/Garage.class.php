<?php
    class Garage implements Inventoriable {
        //Donnée membre
        private $idGarage;
        private $surface;
        private $capacite;
        private $niveau;
        
        /**
         * Constructeur class Garage
         *
         * @param integer $surface
         * @param integer $capacite
         * @param integer $niveau
         */
        public function __construct(int $surface, int $capacite, int $niveau){
            $this->setSurface($surface);
            $this->setCapacite($capacite);
            $this->setNiveau($niveau);
        }
        /**
         * Récupère l'id
         *
         * @return string
         */
        public function getIdentifiant():string{
            return $this->idGarage; 
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
            return "Identifiant Garage : ".$this->idGarage.",\n".
                    "Surface du Garage : ".$this->surface.",\n".
                    "Nombre de véhicules : ".$this->capacite.",\n".
                    "Nombre d'étage : ".$this->niveau."\n";
        }
        /**
         * Set the value of surface
         */
        public function setSurface($surface): self
        {
                $this->surface = $surface;

                return $this;
        }

        /**
         * Set the value of capacite
         */
        public function setCapacite($capacite): self
        {
                $this->capacite = $capacite;

                return $this;
        }

        /**
         * Set the value of niveau
         */
        public function setNiveau($niveau): self
        {
                $this->niveau = $niveau;

                return $this;
        }
    }
?>