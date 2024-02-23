<?php
    class Pion extends PieceEchecs {
        public function peutAllerA(int $x,int $y):bool{
            if (parent::estDansLEchequier($x, $y) && ($this->x == $x)) {
                if (($this->getColor()== parent::NOIRE)) {
                    return ((($this->y == 7)  && ((($this->y - 2 == $y) || ($this->y - 1 == $y)))) || (($this->y != 7) && ($this->y - 1 == $y)));
                } else return (($this->y == 2) && ((($y - 2 == $this->y) || ($y-1 == $this->y))) || (($this->y != 2) && ($y - 1 == $this->y)));
            } else return false;
        }
    }