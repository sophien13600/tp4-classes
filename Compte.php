<?php

abstract class Compte implements OperationSimple, OperationAvancee
{
    private Client $client;
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
    public function getClient()
    {
        return $this->client;
    }


    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }
    final function   crediter(int $somme): void
    {
        $this->solde += $somme;
    }

    abstract public function imprimer(): void;
}
