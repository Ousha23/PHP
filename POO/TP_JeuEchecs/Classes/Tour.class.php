<?php
    class Tour extends PieceEchecs {
        /**
         * Verfie si la Tour peut se déplacer aux coordonnées entrés en param
         *
         * @param integer $x
         * @param integer $y
         * @return boolean
         */
        public function peutAllerA(int $x,int $y):bool{
            if (parent::estDansLEchequier($x, $y)) {
                if (($x == $this->x and $y <=8 and $y>0 and $y != $this->y) || ($y == $this->y and $x <=8 and $x>0  and $x!= $this->x)){
                    return true;
                } else return false;
            } else return false;
        }
    }