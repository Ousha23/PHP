<?php

class Cercle {
    //------------------- propriétés
    private const VAL_DEFAULT = 0;
    private $x;
    private $y;
    private $rayon;

    //------------------- Constructeur
    public function __construct(float $x = self::VAL_DEFAULT,float $y = self::VAL_DEFAULT,float $rayon = self::VAL_DEFAULT){
        $this->setRayon($rayon);
        $this->setX($x);
        $this->setY($y);
    }

    public function __toString():string {
        $msg = "coordonnées (x,y) : (".$this->x.",".$this->y.")\n";
        $msg .= "Rayon de : ".$this->rayon."\n";
        $msg .= "Surface : ".$this->claculerSurface()."\n";
        $msg .= "Circonférence : ".$this->calculerCirconference()."\n";
        return $msg;
    }
    //------------------- Méthodes
    public function calculerCirconference():float {
        return round((2*$this->rayon*M_PI),2);
    }

    public function claculerSurface():float {
        return round((pow($this->rayon, 2)*M_PI),2);
    }
    
    //------------------- Les accesseurs (GETTERS - SETTERS)
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

    /**
     * Get the value of rayon
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     */
    public function setRayon($rayon): self
    {
        $this->rayon = abs($rayon);

        return $this;
    }
}
?>