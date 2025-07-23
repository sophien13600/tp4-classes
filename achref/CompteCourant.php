<?php

class CompteCourant extends Compte implements OperationAvancee
{
    public function __construct(
        int $id,
        float $solde,
        private float $decouvert
    ) {
        parent::__construct($id, $solde);
    }

    public function getDecouvert()
    {
        return $this->decouvert;
    }

    public function setDecouvert($decouvert)
    {
        $this->decouvert = $decouvert;

        return $this;
    }
    function debiter(int $somme): bool
    {
        if ($somme > $this->solde + $this->decouvert) {
            return false;
        }
        $this->solde -= $somme;
        return true;
    }
    function virement(Compte $beneficiaire, int $somme): bool
    {
        $test =  $this->debiter($somme);
        if ($test) {
            $beneficiaire->crediter($somme);
        }
        return $test;
    }
    public function imprimer(): void
    {
        echo "\n*****************************";
        echo "\nType : compte courant";
        echo "\nSolde : $this->solde €";
        echo "\nDécouvert : $this->decouvert €";
        echo "\n*****************************";
    }
}
