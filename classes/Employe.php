<?php
class Employe 
{
    // attributs
    private string $nom;
    private string $prenom;
    private string $email;
    private Entreprise $entreprise;

    public function __construct(string $nom, string $prenom, string $email, Entreprise $entreprise)
{
    // initialisation des valeurs
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->entreprise = $entreprise;
    $this->entreprise->addEmployes($this);
}
    //creation des getters et des setters
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEntreprise()
    {
        return $this->entreprise;
    }

     public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }

}

?>