<?php

function ChargerClasse($classe) // Fonction qui évite d'écrire plusieurs require
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");



$p1 = new Personne (["nom"=>"Jambon","prenom"=>"Jean-Michel","age"=> 45]);
$p2 = new Personne (["nom"=>"Jambon","prenom"=> "Anne-Marie","age"=> 46]);
$v = new Voiture (["marque"=>"Peugeot", "modele"=>"206", "km"=>20000]);
$famille = new Famille (["pere"=>$p1, "mere"=>$p2,"voiture"=>$v]);

$p1->setNom("Jambon");
var_dump($p1);
echo "\n";
var_dump($p2);
echo "\n";
var_dump($v);
echo "\n";
echo $famille->toString();  // Affichage du toString de la classe Famille
