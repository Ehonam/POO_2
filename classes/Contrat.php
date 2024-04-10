<?php
{
class Contrat 
{
    //definition des attributs (on enlève alors toute trace de ce qui est "entreprise" dans la classe Employe)
    private Entreprise $entreprise;
    private Employe $employe;
    private DateTime $dateEmbauche;
    private string $typeContrat;


    public function __construct(Entreprise $entreprise, Employe $employe, string $dateEmbauche, string $typeContrat) 
{
    //definition des valeurs
    $this->Entreprise = $entreprise;
    $this->Employe = $employe;
    $this->dateEmbauche = new DateTime($dateEmbauche);
    $this->typeContrat = $typeContrat;
    // pour que quand je rajoute un contrat, cela se rajoute automatiquement dans les classes Entreprise et Employe
    //les deux tableaux contrats ens Entreprise et Employe vont s'alimenter automatiquement
}

    //mise en place des getters & setters
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getEmploye()
    {
        return $this->employe;
    }

    public function setEmploye($employe)
    {
        $this->employe = $employe;

        return $this;
    }

   public function getDateEmbauche()
    {
        return $this->dateEmbauche->format("d-m-Y"); //si on veut formater l'affichage de la date 
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

}
 
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }
 
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}
?>