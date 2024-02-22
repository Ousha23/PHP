<?php
    class Pion extends PieceEchecs {
        public function peutAllerA(int $x,int $y):bool{
            if (parent::estDansLEchequier($x, $y)) {
                if ($this->getColor()== parent::NOIRE) {
                    if ((($this->y == 7) && ((($this->y - 2 == $y) || ($this->y - 1 == $y)))) || (($this->y != 7) && ($this->y - 1 == $y))) return true;
                    else return false;
                } else if (($this->y == 2) && ((($y - 2 == $this->y) || ($y-1 == $this->y))) || (($this->y != 2) && ($y - 1 == $this->y))) return true;
                else return false;
            } else return false;
        }
    }