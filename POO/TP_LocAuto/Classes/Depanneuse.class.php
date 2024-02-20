<?php
    class Depanneuse extends Materiel implements Inventoriable {
        /**
         * Convertir en chaine de caractère
         *
         * @return string
         */
        public function __toString():string {
            return parent::__toString().
                    "Identifiant Depanneuse : ".$this->idMateriel.", \n".
                    "Nom dépanneuse : ".$this->nom." \n";
        }
        /**
         * Récup ID
         *
         * @return string
         */
        public function getIdentifiant():string {
            return $this->idMateriel;
        }
        /**
         * Récup toutes les infos
         *
         * @return string
         */
        public function getInfosCompletes():string{
            return $this->__toString();
        }
    }
?>