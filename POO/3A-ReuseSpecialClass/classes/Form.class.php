<?php
    abstract class Form {
        protected const VAL_DEFAULT = 0;
        private $x;
        private $y;
        

        public function __construct(float $x = self::VAL_DEFAULT,float $y = self::VAL_DEFAULT){
            $this->setX($x);
            $this->setY($y);
        }

        public function __toString():string {
            $msg = "Coordonnées (x,y) : (".$this->x.",".$this->y.")\n";
            return $msg;
        }

        public abstract function claculerSurface():float;

        
         /**
         * Get the value of x
         */
        public function getX()
        {
            return $this->x;
        }

        /**
         * Set the value of x
         */
        public function setX($x): self
        {
            $this->x = $x;

            return $this;
        }

        /**
         * Get the value of y
         */
        public function getY()
        {
            return $this->y;
        }

        /**
         * Set the value of y
         */
        public function setY($y): self
        {
            $this->y = $y;

            return $this;
        }
        }
?>