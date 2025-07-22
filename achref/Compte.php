<?php

abstract class Compte implements OperationSimple
{
    public function __construct(
        protected int $id,
        protected float $solde
    ) {}


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    final function   crediter(int $somme): void
    {
        $this->solde += $somme;
    }
}
