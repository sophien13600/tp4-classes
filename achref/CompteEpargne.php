<?php

class CompteEpargne extends Compte
{
    public function __construct(
        int $id,
        float $solde,
        private float $tauxInteret
    ) {
        parent::__construct($id, $solde);
    }

    public function getTauxInteret()
    {
        return $this->tauxInteret;
    }

    public function setTauxInteret($tauxInteret)
    {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }
    function debiter(int $somme): bool
    {
        if ($somme > $this->solde) {
            return false;
        }
        $this->solde -= $somme;
        return true;
    }
}