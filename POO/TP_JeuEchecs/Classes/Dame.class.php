<?php
    class Dame extends PieceEchecs {

        //------------Méthodes
        /**
         * Permet de connaitre si la reine peut aller à la position entrée en param
         *
         * @param integer $x
         * @param integer $y
         * @return boolean
         */
        public function peutAllerA(int $x,int $y):bool{
            $reTestFou = new Fou($this->getX(), $this->getY(), $this->getColor());
            $reTestTour = new Tour($this->getX(), $this->getY(), $this->getColor());
            if (parent::estDansLEchequier($x, $y)) {
                return $reTestFou->peutAllerA($x, $y) || $reTestTour->peutAllerA($x, $y);
            } else {
                return false;
            }
        }  
    }
