<?php
    abstract class Materiel {
             //Donnée membre
        protected $idMateriel;
        protected $nom;
        private $disponible;

        /**
         * Constructeur class Materiel
         *
         * @param integer $idMateriel
         * @param string $nom
         * @param boolean $disponible
         */
        public function __construct(int $idMateriel, string $nom, bool $disponible = true){
            $this->idMateriel = $idMateriel;
            $this->nom = $nom;
            $this->disponible = $disponible;
        }
        /**
         * Retourne la valeur du booleen disponible
         *
         * @return boolean
         */
        public function isDisponible():bool{
            return $this->disponible;
        }
        /**
         * Rendre un Materiel disponible
         *
         * @return void
         */
        public function setDisponible():void {
            $this->disponible = true;
        }
        /**
         * Converti  les données en chaine de caractère
         *
         * @return string
         */
        public function __toString():string {
            return "Disponible : ".($this->disponible ? "Oui" : "Non")."\n";
        }

    }
?>