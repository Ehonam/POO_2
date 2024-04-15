<?php

class Entreprise 
{
    // attributs
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $contrats; //on se retrouve avec une liste de contrats et on enlève les getters et setters liés à "employés"

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville)
    {
    // initialisation des différentes valeurs
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->contrats =[];
    }
    // creation des getters et des setters (retourne la valeur) pour pouvoir faire la relation entre les 2

    public function getRaisonSociale(): string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

  public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

  public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    // on peut créer ici un getter qui rassemble toute l'adresse.
    public function getadresseComplete()
    {
        return $this->adresse." ".$this->codePostal." ".$this->ville;
    }

    public function getInfos() 
    {
        return $this." a été crée le ".$this->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante ".$this->getadresseComplete();
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
    } //ici ça va sortir la liste des employés

    public function afficherEmployes() 
    {
        $result = "<h2>Employés de $this</h2>";
        foreach ($this->contrats as $contrat) 
        {
            $result .= $contrat->getEmploye()." (". $contrat->getdateEmbauche() ." en ".$contrat->gettypeContrat().")<br>";
        }
        return $result;
    }

    // le to_String permet d'économiser l'appel d'un getter. Un to_String peut aller chercher un objet sans générer d'erreur
    public function __toString()  
    {
        return $this->raisonSociale;
    }
}
?>
