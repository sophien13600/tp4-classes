<?php
class Client{
    private array $compteCourants= [];
    private CompteEpargne $compteEpargne;
    public function __construct(private int $identifiant, private string $nom, private string $prenom, )
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
   
    
}    
        


/**
 * Get the value of compteCourants
     */ 
    public function getCompteCourants()
    {
        return $this->compteCourants;
    }
    
    /**
     * Set the value of compteCourants
    *
    * @return  self
    */ 
    public function setCompteCourants($compteCourants)
    {
        $this->compteCourants = $compteCourants;

        return $this;
    }
    
    /**
     * Get the value of compteEpargne
    */ 
    public function getCompteEpargne()
    {
        return $this->compteEpargne;
    }

    /**
     * Set the value of compteEpargne
     *
     * @return  self
     */ 
    public function setCompteEpargne($compteEpargne)
    {
        $this->compteEpargne = $compteEpargne;

        return $this;
        
        public function  ajouterCompteCourant(CompteCourant $compteCourant){
        if (count($this->comptesCourants) == 3) {
            return false;
        }
        $this->comptesCourants[] = $compteCourant;
        return true;
        }
        public function ajouterCompteEpargne(CompteEpargne $compteEpargne){
    }
}