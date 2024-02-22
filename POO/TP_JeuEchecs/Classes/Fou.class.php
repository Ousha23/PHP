<?php
    class Fou extends PieceEchecs {

        //------------Méthodes
        /**
         * Permet de connaitre si le fou peut aller à la position entrée en param
         *
         * @param integer $x
         * @param integer $y
         * @return boolean
         */
        public function peutAllerA(int $x,int $y):bool{
            if (parent::estDansLEchequier($x, $y) and (abs($x - $this->x)!=0) and (abs($y - $this->y)!=0) and abs($x - $this->x) == abs($y - $this->y)){
                return true;
            } else return false;
        }

        
        
    }
