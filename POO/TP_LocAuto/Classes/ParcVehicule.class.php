<?php
    class ParcVehicule {
         //Donnée membre
        private static $parc;

        /**
         * Alimenter le tableau parc
         *
         * @param Inventoriable $inventoriable
         * @return void
         */
        public static function enregistrer(Inventoriable $inventoriable){
            self::$parc[]=$inventoriable;

        }
        /**
         * affiche les données des vehicules
         *
         * @return void
         */
        public static function getParc(){
            foreach(self::$parc as $vehicule){
                echo get_class($vehicule).":\n".$vehicule->getInfosCompletes();
            }
        }
    }
?>