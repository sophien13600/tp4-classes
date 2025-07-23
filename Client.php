<?php

class Client
{
    private array $comptesCourants = [];
    private ?CompteEpargne $compteEpargne = null;
    public function __construct(
        private int $identifiant,
        private string $nom,
        private string $prenom,
    ) {}

    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function ajouterCompteCourant(CompteCourant $compteCourant)
    {
        if (count($this->comptesCourants) == 3) {
            return false;
        }
        $this->comptesCourants[] = $compteCourant;
        $compteCourant->setClient($this);
        return true;
    }
    public function ajouterCompteEpargne(CompteEpargne $compteEpargne)
    {
        if ($this->compteEpargne != null) {
            return false;
        }
        $this->compteEpargne = $compteEpargne;
        $compteEpargne->setClient($this);
        return true;
    }

    public function consulter(): void
    {
        echo "\nIdentifiant Client : $this->identifiant";
        echo "\nNom Client : $this->nom";
        echo "\nPrénom Client : $this->prenom";
        if (count($this->comptesCourants) > 0) {
            echo "\nListe des comptes courants";
            foreach ($this->comptesCourants as $cc) {
                $cc->imprimer();
            }
        } else {
            echo "\nAucun compte courant associé à ce client";
        }
        if ($this->compteEpargne != null) {
            echo "\nCompte épargne";
            $this->compteEpargne->imprimer();
        } else {
            echo "\nAucun compte épargne associé à ce client";
        }
    }
}
