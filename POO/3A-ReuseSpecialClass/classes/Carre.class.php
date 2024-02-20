<?php
class Carre extends Rectangle{

    public function __construct(float $cote=0, float $x = Form::VAL_DEFAULT, float $y = Form::VAL_DEFAULT){
        parent::__construct($cote, $cote, $x, $y);
    }

    public function __toString():string {
        $msg = Form::__toString();
        $msg .= "Coté : ".$this->getLongueur()."\n";
        $msg .= "Surface : ".$this->claculerSurface()."\n";
        return $msg;
    }
}
?>