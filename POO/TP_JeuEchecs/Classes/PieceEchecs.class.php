<?php
    abstract class PieceEchecs {
        public const BLANCHE =1;
        public const NOIRE =2;
        protected $x; // colonne
        protected $y; // ligne
        private $color; // couleur pièce
        private static $pieces;

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

            return (($this->x+$this->y)%2)=== 0 ? self::NOIRE : self::BLANCHE;
        }

        /**
         * Méthode abstraite qui oblige les classes filles à vérifier la possibilité du déplacement ou pas
         *
         * @param integer $x
         * @param integer $y
         * @return boolean
         */
        abstract public function peutAllerA(int $x,int $y):bool;

        public function __toString():string {
            if ($this->color == self::BLANCHE) $msgP = "Blanche";
            else $msgP = "noire";
            if ($this->getColorCase($this->color) == self::BLANCHE) $msgC = "Blanche";
            else $msgC = "noire";
            return get_class($this).":\n".
                    "Position (X,Y) :(".$this->x.",".$this->y."),\n".
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
            if ($color != self::BLANCHE && $color != self::NOIRE){
                $this->color = self::BLANCHE;
            } else $this->color = $color;

            return $this;
        }

        /**
         * Get the value of x
         */
        public function getX()
        {
                return $this->x;
        }

        /**
         * Get the value of y
         */
        public function getY()
        {
                return $this->y;
        }
    }