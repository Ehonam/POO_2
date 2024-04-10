<h1>POO Entreprise</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//echo $elanformation->getRaisonSociale();
//var_dump($elanFormation);
//echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getdateCreation()->format("d-m-Y")." et se situe à l'adresse suivante ".$elanFormation->getadresse()." ".$elanFormation->getcodePostal()." ".$elanFormation->getville();
//echo $elanFormation->getadresseComplete();
//echo $elanFormation->getRaisonSociale()." a été crée le ".$elanFormation->getdateCreation()->format("d-m-Y")." et se situe à l'adresse suivante ".$elanFormation->getadresseComplete();

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG" );
$tf1 = new Entreprise("TF1", "1970-01-01", "13 rue de la Seine", "75000", "PARIS");
$FranceTravail = new Entreprise("FranceTravail", "2023-01-01", "13 rue Caisserie", "91150", "ETAMPES");

$stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr");
$mickael = new Employe("MURRMANN", "Mickael", "mickael@elan-formation.fr");

$c1 = new Contrat($elanFormation, $stephane, "2020-01-01", "CDI");
$c2 = new Contrat($elanFormation, $mickael, "2010-01-01", "CDD");
$c3 = new Contrat($tf1, $stephane, "2022-01-01", "interim");
$c4 = new Contrat($FranceTravail, $stephane, "2023-01-01", "CDD");
//maintenant les employes, les entreprises et les contrats ont été listés
//il nous faudra maintenant lister pour l'employeur les employes qui ont travailles chez lui et les salariés d'avoir toutes les entreprises dans lesquelles ils ont travaillés

// echo $elanFormation
// echo $elanFormation->getInfos();
// $stephane->setEntreprise($tf1);
// echo $stephane->getInfos();
// var_dump($elanFormation);

echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();
echo $FranceTravail->afficherEmployes();

echo $stephane->afficherEntreprises();
echo $mickael->afficherEntreprises();

?>