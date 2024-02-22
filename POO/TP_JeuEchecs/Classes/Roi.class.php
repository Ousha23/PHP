<?php
    class Roi extends PieceEchecs {
        public function peutAllerA(int $x,int $y):bool{
            if (parent::estDansLEchequier($x, $y)) {
                if ((abs($x - $this->x) == 1 and abs($y - $this->y) == 1) or
                    (abs($x - $this->x) == 0 and abs($y - $this->y) == 1) or
                    (abs($x - $this->x) == 1 and abs($y - $this->y) == 0)) {
                    return true;
                } else return false;
            } else 
                return false;
            }
        }