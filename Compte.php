<?php


abstract class Compte implements OperationSimple{
        public function __construct(protected int $identifiant,protected float $solde,)
        {
            
        }
        
        /**
         * Get the value of identifiant
         */ 
        public function getIdentifiant()
        {
                return $this->identifiant;
            }
            
            /**
             * Set the value of identifiant
         *
         * @return  self
         */ 
        public function setIdentifiant($identifiant)
        {
            $this->identifiant = $identifiant;
            
            return $this;
        }

        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
            return $this->solde;
        }
        
        /**
         * Set the value of solde
        *
        * @return  self
        */ 
        public function setSolde($solde)
        {
            $this->solde = $solde;
            
            return $this;
        }
         public function crediter(int $somme):void{
            $this->setSolde($somme);

    }
        abstract function debiter(int $somme):bool;
        abstract function imprimer():void;
    }