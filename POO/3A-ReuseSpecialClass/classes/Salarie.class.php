<?php
class Salarie extends Personne {
    private $societe;

    public function __construct(string $societe, string $nom = parent::NOM_INCONNU, int $age = parent::AGE_DEFAULT)
    {
        parent::__construct($nom, $age);
        $this->setSociete($societe);
    }
    
    public function __toString():string
    {
            return parent::__toString()." et je travaille chez ".$this->societe."\n";
    }

    public function changerAgeSalarie(int $age){
        $this->setAge($age);
    }
    /**
     * Get the value of societe
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set the value of societe
     */
    public function setSociete(string $societe): void
    {
        $this->societe = strtoupper($societe);

    }
}
?>