<?php
class Employe 
{
    // attributs
    private string $nom;
    private string $prenom;
    private string $email;
    private array $contrats; //on se retrouve avec une liste de contrats


    public function __construct(string $nom, string $prenom, string $email)
{
    // initialisation des valeurs
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->contrats =[];

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

    
    public function getContrats()
    {
        return $this->contrats;
    }


    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

        // lorsqu'on a un tableau dans une entité, il faut créer une fonction qui permettra de rajouter quelque chose dans ce tableau-là
    public function addContrat(Contrat $contrats) 
    {
        $this->contrats[] = $contrat;
    } //ici ça va sortir la liste des entreprises

    public function afficherEntreprises() 
    {
        $result = "<h2>Entreprises de $this</h2>";
        foreach ($this->contrats as $contrat) 
        {
            $result .= $contrat->getEntreprise()." (". $contrat->getdateEmbauche() ." en ".$contrat->gettypeContrat().")<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }


}

?>
