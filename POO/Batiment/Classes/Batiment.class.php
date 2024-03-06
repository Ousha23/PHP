<?php
    class Batiment {
        private $adresse;
        private $nbPiecesMaxi;
        private $nbPieces;
        private $tabPieces;

        /**
         * Constructeur de la classe Batiment
         *
         * @param string $adresse
         * @param integer $nbPiecesMaxi
         * @param array $tabPieces
         */
        public function __construct(string $adresse, int $nbPiecesMaxi, array $tabPieces = []){
            $this->setAdresse($adresse);
            $this->setNbPiecesMaxi($nbPiecesMaxi);
            $this->setTabPieces($tabPieces);
        }
        /**
         * Ajouter une piece au niveau d'un batiment
         *
         * @param Piece $piece
         * @return void
         */
        public function ajouterPiece(Piece $piece){
            if ($this->getNbPiecesMaxi()>=count($this->tabPieces)){
                $tempTab = $this->tabPieces;
                $tempTab[] = $piece;
                $this->setTabPieces($tempTab);
            } else throw new Exception ("le nombre de pièce max de ce batiment est atteint"); 
        }
        /**
         * Calcule le nbre de pièce libre
         *
         * @return integer
         */
        public function getNBPiecesLibres():int{
            return $this->getNbPiecesMaxi()-count($this->tabPieces);
        }
        /**
         * Affiche les données d'un batiment
         *
         * @return void
         */
        public function affiche(){
            echo $this->__toString();
        }
        /**
         * Converti les élements en chaine de caractère
         *
         * @return string
         */
        public function __toString():string{
            $pieceToString = "";
                        foreach ($this->tabPieces as $piece) {
                            $pieceToString.=$piece."</br>\n";
                        }
            $batimentTostring = "Adresse du Batiment : ".$this->adresse.",</br>\n".
                    "Nb piece libre : ".$this->getNBPiecesLibres().",</br>\n".
                    "Nb Maxi de pièce : ".$this->nbPiecesMaxi.",</br>\n".
                    "Nb pièce utilisées: ".$this->nbPieces.",</br></br>\n";
                    
            if (count($this->tabPieces)> 0){
                $batimentTostring.="Détail des pièces : </br>\n".$pieceToString."</br>\n";
            }
            return $batimentTostring;
        }

        // ---------- ACCESSEURS
        /**
         * Get the value of adresse
         */
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         */
        public function setAdresse($adresse): self
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of nbPiecesMaxi
         */
        public function getNbPiecesMaxi()
        {
                return $this->nbPiecesMaxi;
        }

        /**
         * Set the value of nbPiecesMaxi
         */
        public function setNbPiecesMaxi($nbPiecesMaxi): self
        {
            //controle le nbre de pièce max par rapport au tableau des pièces
            if (($this->tabPieces == null) or count($this->tabPieces)<= $nbPiecesMaxi){
                $this->nbPiecesMaxi = $nbPiecesMaxi;
                return $this;
            } else throw new Exception ("le champs nbPiecesMaxi dans la class Batiment est inférieur au tableau tabPieces");
        }

        /**
         * Get the value of nbPieces
         */
        public function getNbPieces()
        {
                return $this->nbPieces;
        }

        /**
         * Set the value of nbPieces
         */
        public function setNbPieces($nbPieces): self
        {
                $this->nbPieces = $nbPieces;

                return $this;
        }

        /**
         * Get the value of tabPieces
         */
        public function getTabPieces()
        {
                return $this->tabPieces;
        }

        /**
         * Set the value of tabPieces
         */
        public function setTabPieces($tabPieces): self
        {
            //controle le nbre de pièce max par rapport au tableau des pièces
            if (count($tabPieces)<=$this->nbPiecesMaxi){
                $this->setNbPieces(count($tabPieces));
                $this->tabPieces = $tabPieces;
                return $this;
            } else throw new Exception ("le champs nbPiecesMaxi dans la class Batiment est inférieur au tableau tabPieces");
        }
    }

