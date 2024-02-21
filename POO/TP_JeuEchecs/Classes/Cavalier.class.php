<?php
    class Cavalier extends PieceEchecs {

        //------------Méthodes
        /**
         * Permet de connaitre si le cavalier peut aller à la position entrée en param
         *
         * @param integer $x
         * @param integer $y
         * @return boolean
         */
    public function peutAllerA(int $x,int $y):bool{
        // if (($x == $this->x - 2 and $y == $this->y - 1 ) or ($x == $this->x + 2 and $y == $this->y + 1) or ($x == $this->x - 1 and $y == $this->y - 2 ) or ($x == $this->x + 2 and $y == $this->y - 1) or ($x == $this->x + 1 and $y == $this->y + 2) or ($x == $this->x + 1 and $y == $this->y - 2) or ($x == $this->x - 2 and $y == $this->y + 1) or ($x == $this->x - 1 and $y == $this->y + 2)){
        //     return true;
        // } else {
        //     return false;
        // }
        $distX = abs($x-$this->x);
        $distY = abs($y-$this->y);

        if (parent::estDansLEchequier($x, $y) and (pow($distX,2)+pow($distY,2)) == 5) return true;
        else return false;
    }
}
