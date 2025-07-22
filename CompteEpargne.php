<?php

class CompteEpargne extends Compte{
    public function __construct(int $identifiant, float $solde,private float $tauxInteret,)
    { 
        parent::__construct($identifiant,$solde);   
     }
    

    /**
     * Get the value of tauxInteret
     */ 
    public function getTauxInteret()
    {
        return $this->tauxInteret;
    }

    /**
     * Set the value of tauxInteret
     *
     * @return  self
     */ 
    public function setTauxInteret($tauxInteret)
    {
        $this->tauxInteret = $tauxInteret;

        return $this;
    }


    public function crediter(int $somme):void{ }
    public function debiter(int $somme):bool{
        if(($this->getSolde() - $somme )> 0){
            
            return true;
        }
        return false;
    }
    public function imprimer():void{
        echo $this->getSolde();
        echo $this->getTauxInteret();
    }

}