<?php
    class Pion extends PieceEchecs {
        public function peutAllerA(int $x,int $y):bool{
            if (parent::estDansLEchequier($x, $y) && ($this->x == $x)) {
                if (($this->getColor()== parent::NOIRE)) {
                    return ((($this->y == 7)  && ((($this->y - 2 == $y) || ($this->y - 1 == $y)))) || (($this->y != 7) && ($this->y - 1 == $y)));
                } else return (($this->y == 2) && ((($y - 2 == $this->y) || ($y-1 == $this->y))) || (($this->y != 2) && ($y - 1 == $this->y)));
            } else return false;
        }

        /**
         * Verifier si le pion peut manger la piece en parametre 
         *
         * @param PieceEchecs $piece
         * @return boolean
         */
        public function peutManger(PieceEchecs $piece):bool {
            if (($this->color === $piece->getColor()) or (abs($piece->x - $this->x)!==1)){
                if (($this->color == parent::BLANCHE) && ($piece->y - $this->y !== 1)) return false;
                if (($this->color == parent::NOIRE) && ($this->y - $piece->y !== 1)) return false;
                return false;
            } return true;
            

        }
    }