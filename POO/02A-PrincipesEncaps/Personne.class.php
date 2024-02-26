<?php
    class Personne {
        private const PAS_DE_SOCIETE = "?";
        private $nom;
        private $societe = self::PAS_DE_SOCIETE;
        private static $effecifs = 0;
        
        public function __construct(string $nom, string $societe = self::PAS_DE_SOCIETE) 
        {
            $this->nom = strtoupper($nom);
            $this->setSociete($societe);
            self::$effecifs++;
        }
        public function afficher():self
        {
            echo "Je m'appelle ".$this->nom;
            if ($this->societe === self::PAS_DE_SOCIETE){
                echo " et je ne suis pas salarié.\n";
            } else {
                echo " et je travaille chez " .$this->societe."\n";
            }
            return $this;
        }

        public function identifier():self
        {
            echo "je suis ".$this;
            return $this;
        }

        public function __toString():string
        {
            return $this->nom;
        }
        public function getSociete()
        {
            return $this->societe;
        }

        public function setSociete(string $societe):self
        {
            if ($this->societe === self::PAS_DE_SOCIETE || $societe === self::PAS_DE_SOCIETE) {
                if (strlen($societe) <= 30) {
                    $this->societe = strtoupper($societe);
                } else {
                    echo "Le nom de la société ne doit pas dépasser 30 caractères";
                    exit();
                }
            } else {
                echo "Vous êtes déjà salarié";
                exit();
            }
            return $this;
}
        public static function getEffectif():int 
        {
            return self::$effecifs;
        }
        
    }
    

?>