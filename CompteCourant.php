<?php

class CompteCourant extends Compte implements OperationAvancee{
    public function __construct(int $identifiant, float $solde, private float $decouvert,)
    {
     parent::__construct($identifiant,$solde);   
    }
    
    
    /**
     * Get the value of decouvert
    */ 
    public function getDecouvert()
    {
        return $this->decouvert;
    }
    
    /**
     * Set the value of decouvert
    *
    * @return  self
    */ 
    public function setDecouvert($decouvert)
    {
        $this->decouvert = $decouvert;
        
        return $this;
    }
    public function virement(Compte $beneficiaire ,int $somme):bool{
        if($this->debiter($somme)==true){
            $beneficiaire->crediter($somme);
            $this->setSolde($somme);
            return true;
        }
        return false;
    }


    public function debiter(int $somme):bool{
        if($this->getSolde() -$somme > $this->decouvert){
            $this->setSolde($this->getSolde() - $somme) ;
            return true;
        }
        return false;
    }
    public function imprimer():void{
        echo "Solde:  $this->solde" . PHP_EOL;
        echo $this->getDecouvert()
        ;
    }
}