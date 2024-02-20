<?php
class Rectangle extends Form {
    private $longueur;
    private $largeur;

    public function __construct(float $longueur = Form::VAL_DEFAULT,float $largeur = Form::VAL_DEFAULT ,float $x = Form::VAL_DEFAULT, float $y = Form::VAL_DEFAULT){
        parent::__construct($x,$y);
        $this->setLongueur($longueur);
        $this->setLargeur($largeur);
    }

    public function __toString():string {
        $msg = parent::__toString();
        $msg .= "Largeur : ".$this->largeur.", Longuer : ".$this->longueur."\n";
        $msg .= "Surface : ".$this->claculerSurface()."\n";
        return $msg;
    }

    public final function claculerSurface():float {
        return round(($this->longueur)*$this->largeur,2);
    }

    

    /**
     * Set the value of longueur
     */
    public function setLongueur($longueur): self
    {
        $this->longueur = abs($longueur);

        return $this;
    }

    /**
     * Set the value of largeur
     */
    public function setLargeur($largeur): self
    {
        $this->largeur = abs($largeur);

        return $this;
    }

    /**
     * Get the value of longueur
     */
    public function getLongueur()
    {
        return $this->longueur;
    }
}
?>