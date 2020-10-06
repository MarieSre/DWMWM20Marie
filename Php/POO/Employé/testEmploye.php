<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$e1 = new Employe(["nom"=>"Dupont", "prenom"=>"Michel","dateEmbauche" => new DateTime("30-11-2010"),"job"=>"Technicien", "service"=>"Maintenance", "salaire" => 10]);
$e2 = new Employe(["nom"=>"Serrure", "prenom"=>"Marie","dateEmbauche" => new DateTime("02-08-1996"), "job"=>"Developpeur", "service"=>"Informatique", "salaire" => 13]);
$e3 = new Employe(["nom"=>"Pouet", "prenom"=>"Laly","dateEmbauche" => new DateTime("01-10-2008"), "job"=>"Responsable", "service"=>"Ressource Humaine", "salaire" => 12]);
$e4 = new Employe(["nom"=>"Truc", "prenom"=>"Toto","dateEmbauche" => new DateTime("31-12-2009"), "job"=>"Agent de Maitrise", "service"=>"Maintenance", "salaire" => 11]);
$e5 = new Employe(["nom"=>"Wauthier", "prenom"=>"Arnaud","dateEmbauche" => new DateTime("29-04-1991"), "job"=>"Technicien", "service"=>"Réseau", "salaire" => 18]);

$listeEmployes=[$e1, $e2, $e3, $e4, $e5];


//Ordre de transfert
$dateAujourdhui = new DateTime('now');
// $annee = $dateAujourdhui->format('Y');
// $jourDePrime = new DateTime('30-11-' . $annee);
$jourDePrime = (new DateTime())->setDate($dateAujourdhui->format('Y'),11,30);
echo "Jour de prime :\n";
var_dump($jourDePrime);
echo "Jour aujourd'hui :\n";
var_dump($dateAujourdhui);

if ($jourDePrime < $dateAujourdhui)
{ //on compare les dates
    echo "L'ordre de transfert a été envoyé à la banque :\n" . $e3->prime();
}
else
{
    echo "L'ordre de transfert n'a pas été envoyé à la banque\n";
}

/* Prime
echo $e5->toString();
echo"\n";
echo $e5->prime();*/


// Affichage du nombre d'employés
echo "Il y a ". Employe::getCompteur(). " dans l'entreprise.";
echo "\n";

// Tri par ordre alphabétique du nom complet

asort($listeEmployes);
foreach($listeEmployes as $key=>$val)
{
    echo "$key = $val\n";
}
echo $listeEmployes;

// Coût total des employés










/* Mon main

$ancien = new Employe (["nom"=>"Serrure", "prenom"=>"Marie","dateEmbauche"=>new DateTime('2018-06-12'),"job"=>"Boulangère", "service"=>"pâtisserie","salaire"=>14.5]);
$d1 = new DateTime ('2020-10-06');

var_dump($d1);
echo "\n";
var_dump($ancien);
echo "\n";
echo $ancien->anciennete();
echo"\n";
echo $ancien->toString();*/




