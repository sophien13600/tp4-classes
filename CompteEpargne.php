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
public function ajouterInteret(){
     //return $this->setSolde($this->getSolde() * $this->getTauxInteret());
     $this->solde += ($this->solde * $this->tauxInteret) / 100;
    }


    function debiter(int $somme): bool
    {
        if ($somme > $this->solde) {
            return false;
        }
        $this->solde -= $somme;
        return true;
    }
    public function imprimer():void{
        echo $this->getSolde();
        echo $this->getTauxInteret();
    }
    function virement(Compte $beneficiaire, int $somme): bool
    {

        $test = $this->getClient()->getIdentifiant() != $beneficiaire->getClient()->getIdentifiant() &&  $this->debiter($somme);
        if ($test) {
            $beneficiaire->crediter($somme);
        }
        return $test;
    }

}