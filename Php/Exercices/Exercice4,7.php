<?php
/* Cet exercice reprend le principe des assurances automobile*/
$age=readline("Quel âge avez vous ? :");
$permis=readline("Depuis combien d'année avez-vous le permis ? :");
$accident=readline("Entrer le nombre d'accident :");
$fidelite=readline("Depuis combien de temps êtes-vous client ? :");

if ($age<25 && $permis<2 && $accident == 1){
    echo "Vous n'êtes pas assurable";
}
if ($age<25 && $permis<2 && $accident == 0){
    echo "Tarif rouge";
} 
if (($age>=25 && $permis<2 && $accident == 0) || ($age>25 && $permis>=2 && $accident == 0)){
    echo "Tarif orange";
} else if (($age>=25 && $permis<2 && $accident == 1) || ($age>25 && $permis>=2 && $accident == 1)){
    echo "Tarif rouge";
} 
if ($age>=25 && $permis>=2 && $accident == 0 && $fidelite<1){
    echo "Tarif vert";
} else if ($age>=25 && $permis>=2 && $accident == 1) {
    echo "Tarif orange";
} else if ($age>=25 && $permis>=2 && $accident == 2){
    echo "Tarif rouge";
} else if ($age>=25 && $permis>=2 && $accident<2){
    echo "Vous n'êtes pas assurable";
}
if ($age>=25 && $permis>=2 && $accident == 0 && $fidelite>=1){
    "Tarif bleu";
}
/*Note à soit même: Optimiser l'exercice*/

/*Correction de Martine
do  {
    $age = readline("Entrez l'age du conducteur: ");
}  while ((!is_numeric($age)) || (!ctype_alnum($age)) || ($age<15));

do  {
    $permis = readline("Entrez le nombre d'année de permis: ");
}  while ((!is_numeric($permis)) || (!ctype_alnum($permis)) || ($permis<-1));

do  {
    $accident = readline("Entrez le nombre d'accident: ");
}  while ((!is_numeric($accident)) || (!ctype_alnum($accident)) || ($accident<-1));

do  {
    $fidelite = readline("Entrez le nombre d'année de contrat: ");
}  while ((!is_numeric($fidelite)) || (!ctype_alnum($fidelite)) || ($fidelite<-1));

$niveau = 0;
if ($age>25) {
    $niveau ++;
}
if ($permis>1) {
    $niveau ++;
}
$niveau -= $accident;

if ($niveau>-1 and $fidelite>=1) {
    $niveau ++;
}
if ($niveau <-1) {
    echo "Vous n'êtes pas assurable";
} elseif ($niveau == 0) {
    echo "On peut vous assurer sur un contrat rouge";
} elseif ($niveau == 1) {
    echo "On peut vous assurer sur un contrat orange";
} elseif ($niveau == 2) {
    echo "On peut vous assurer sur un contrat vert";
} else {
    echo "On peut vous assurer sur un contrat bleu";
}*/