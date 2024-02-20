<?php
    class Outil extends Materiel {

        /**
         * Convertir les données en chaine de caractère
         *
         * @return string
         */
        public function __toString():string {
            return parent::__toString().
                    "Identifiant Matériel : ".$this->idMateriel.", \n".
                    "Nom matériel : ".$this->nom." \n";
        }
        /**
         * Récupérer l'ID du materiel
         *
         * @return string
         */
        public function getIdentifiant():string {
            return $this->idMateriel;
        }
        /**
         * Récupérer toutes les données de l'objet Outil
         *
         * @return string
         */
        public function getInfosCompletes():string{
            return $this->__toString();
        }
    }
?>