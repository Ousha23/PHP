<?php
    abstract class Contenant {
        protected $largeur;
        protected $hauteur;
        protected $profondeur;
        protected $nom;

        public function __construct(string $nom, int $largeur, int $hauteur, int $profondeur){
            $this->setNom($nom);
            $this->setHauteur($hauteur);
            $this->setLargeur($largeur);
            $this->setProfondeur($profondeur);
        }

        /**
         * Calculer le volume de la pièce
         *
         * @return integer
         */
        protected function getVolume():int{
            return $this->largeur*$this->profondeur*$this->hauteur;
        }

        /**
         * Calculer la surface de la pièce
         *
         * @return integer
         */
        protected function getSurface():int {
            return $this->largeur*$this->profondeur;
        }
        
        /**
         * Convertie les données en chaine de caractère
         *
         * @return string
         */
        public function __toString():string{
            return "Nom : ".$this->nom.",</br>\n".
                    "Hauteur : ".$this->hauteur." cm,</br>\n".
                    "Largeur: ".$this->largeur." cm,</br>\n".
                    "Profondeur: ".$this->profondeur." cm,</br>\n".
                    "Surface: ".$this->getSurface().",</br>\n".
                    "Volume: ".$this->getVolume().",</br>\n";
        }
        
        //----------- les accesseurs

        /**
         * Get the value of largeur
         */
        public function getLargeur()
        {
                return $this->largeur;
        }

        /**
         * Set the value of largeur
         */
        public function setLargeur($largeur): self
        {
                $this->largeur = $largeur;

                return $this;
        }

        /**
         * Get the value of hauteur
         */
        public function getHauteur()
        {
                return $this->hauteur;
        }

        /**
         * Set the value of hauteur
         */
        public function setHauteur($hauteur): self
        {
                $this->hauteur = $hauteur;

                return $this;
        }

        /**
         * Get the value of profondeur
         */
        public function getProfondeur()
        {
                return $this->profondeur;
        }

        /**
         * Set the value of profondeur
         */
        public function setProfondeur($profondeur): self
        {
                $this->profondeur = $profondeur;

                return $this;
        }

        /**
         * Get the value of nom
         */
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         */
        public function setNom($nom): self
        {
                $this->nom = $nom;

                return $this;
        }
    }