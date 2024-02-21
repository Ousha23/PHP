<?php
    class PieceEchecs {
        protected $x; // colonne
        protected $y; // ligne
        protected $color; // couleur pièce

        /**
         * Constructeur Class PieceEchecs
         *
         * @param integer $x
         * @param integer $y
         * @param integer $color
         */
        public function __construct(int $x, int $y, int $color){
            $this->setX($x);
            $this->setY($y);
            $this->setColor($color);
        }

        // --------------- methodes
        public function estDansLEchequier(int $x, int $y):bool{
            if (($x>0 and $x<=8) and ($y>0 and $y<=8)) return true;
            else return false;
        }

        public function getColorCase(int $colorCase){
            if ($this->color == 1) $colorCase = 2;
            else $colorCase = 1;
            return $colorCase;
        }



        public function __toString():string {
            if ($this->color == 1) $msgP = "Blanche";
            else $msgP = "noire";
            if ($this->getColorCase($this->color) == 1) $msgC = "Blanche";
            else $msgC = "noire";
            return get_class($this).":\n".
                    "X : ".$this->x.",\n".
                    "Y : ".$this->y.",\n".
                    "Couleur Piece : ".$this->color." - ".$msgP.",\n".
                    "Couleur Case : ".$this->getColorCase($this->color)." - ".$msgC."\n";

        }
        //--------------- les accesseurs

        /**
         * Get the value of color
         */
        public function getColor():int
        {
                return $this->color;
        }

        /**
         * Set the value of x
         */
        public function setX(int $x): self
        {
            if ($x < 1) $this->x = 1;
            else if ($x > 8) $this->x = 8;
            else $this->x = $x;

            return $this;
        }

        /**
         * Set the value of y
         */
        public function setY(int $y): self
        {
            if ($y < 1) $this->y = 1;
            else if ($y > 8) $this->y = 8;
            else $this->y = $y;

            return $this;
        }

        /**
         * Set the value of color
         */
        public function setColor(int $color): self
        {
            if ($color != 1 && $color != 2){
                $this->color = 1;
            } else $this->color = $color;

            return $this;
        }
    }