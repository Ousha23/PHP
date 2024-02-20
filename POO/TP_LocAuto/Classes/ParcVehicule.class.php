<?php
    class ParcVehicule {
        // pour faire marché les méthodes en commentaire il faut enlever toutes les occurances de "static" 
         //Variable de classe
        private static $parc;

        /**
         * Alimenter le tableau parc
         *
         * @param Inventoriable $inventoriable
         * @return void
         */
        public static function enregistrer(Inventoriable $inventoriable){
            //$this->parc[]=$inventoriable;
            self::$parc[]=$inventoriable;

        }
        /**
         * affiche les données des vehicules
         *
         * @return void
         */
        public static function getParc(){
            //foreach($this->parc as $vehicule){
            foreach(self::$parc as $vehicule){
                echo get_class($vehicule).":\n".$vehicule->getInfosCompletes();
            }
        }
    }
?>