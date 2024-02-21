<?php
    class Moteur{
        private $volumeReservoir;
        private $volumeTotal;

        private $demarre;

        /**
         * Constructeur de la classe Moteur
         *
         * @param float $volumeReservoir
         * @param float $volumeTotal
         * @param boolean $demarre
         */
        public function __construct(float $volumeReservoir, float $volumeTotal, bool $demarre){
            $this->setVolumeReservoir($volumeReservoir);
            $this->setVolumeTotal($volumeTotal);
            $this->setDemarre($demarre);
        }
        //------------------- METHODES

        public function faireLePlein(float $volume) {
            echo "Plein effectué avec ".$volume." litres\n";
        }

        public function demarrer():bool {
            if ($this->demarre) {
                $this->volumeTotal -= $this->volumeTotal/10;
                return true;
            }   else return false;
        }

        public function arreter(){
            echo "Le moteur s'arrête";
        }

        public function utiliser(float $volumeTrajet){
            if ($this->volumeTotal < $volumeTrajet) {
                $this->demarre = false;
                echo "impossible d'effectuer le trajet";
            } else $this->demarre = True;
        }

        //------------------- ACCESSEURS
        /**
         * Get the value of volumeReservoir
         */
        public function getVolumeReservoir()
        {
                return $this->volumeReservoir;
        }

        /**
         * Set the value of volumeReservoir
         */
        public function setVolumeReservoir($volumeReservoir): self
        {
                $this->volumeReservoir = $volumeReservoir;

                return $this;
        }

        /**
         * Get the value of volumeTotal
         */
        public function getVolumeTotal()
        {
                return $this->volumeTotal;
        }

        /**
         * Set the value of volumeTotal
         */
        public function setVolumeTotal($volumeTotal): self
        {
                $this->volumeTotal = $volumeTotal;

                return $this;
        }

        /**
         * Get the value of demarre
         */
        public function getDemarre()
        {
                return $this->demarre;
        }

        /**
         * Set the value of demarre
         */
        public function setDemarre($demarre): self
        {
                $this->demarre = $demarre;

                return $this;
        }
    }