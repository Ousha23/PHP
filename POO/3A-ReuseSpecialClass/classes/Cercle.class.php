<?php

class Cercle extends Form {
    //------------------- propriétés
    
    private $rayon;

    //------------------- Constructeur
    public function __construct(float $rayon = parent::VAL_DEFAULT, float $x = parent::VAL_DEFAULT,float $y = parent::VAL_DEFAULT){
        parent::__construct($x,$y);
        $this->setRayon($rayon);
    }

    public function __toString():string {
        $msg = parent::__toString();
        $msg .= "Rayon de : ".$this->rayon."\n";
        $msg .= "Surface : ".$this->claculerSurface()."\n";
        $msg .= "Circonférence : ".$this->calculerCirconference()."\n";
        return $msg;
    }
    //------------------- Méthodes de comportement
    public function calculerCirconference():float {
        return round((2*$this->rayon*M_PI),2);
    }

    public function claculerSurface():float {
        return round((pow($this->rayon, 2)*M_PI),2);
    }
    
    //------------------- Les accesseurs (GETTERS - SETTERS)
   

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