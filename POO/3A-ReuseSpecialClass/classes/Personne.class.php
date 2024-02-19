<?php
class   Personne {
    
    protected const NOM_INCONNU = "Nom inconnu";
    protected const AGE_DEFAULT = 0;
    private $nom; // encapsuler = protégé
    private $age;

    public function __construct(string $nom = self::NOM_INCONNU, int $age = self::AGE_DEFAULT){ // formater les instances de classe
        $this->setNom($nom);
        $this->setAge($age);
    }

    // Les procédures :
    public function __toString():string
    {
            $msg = "Je m'appelle ".$this->nom;
        if ($this->age !== self::AGE_DEFAULT) {
            $msg .= " et j'ai ".$this->age."\n";
        } 
        return $msg;
    }

    
    // les GETTERS et SETTERS (accesseurs)
    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    protected function setNom(string $nom): void // mettre des contrôles
    {
        $this->nom = strtoupper($nom);

    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    protected function setAge(int $age)
    {
        if ($age >= 1 && $age <= 120) 
        {
            $this->age = $age;
        } else 
        {
            $this->age = self::AGE_DEFAULT;
        }

    }
}
?>