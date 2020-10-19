<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

$somme = 0;

// Saisie du prix de(s) l'article(s)
do
{
    $prix = demandeEntier("Combien coûte l'article ? ");
    $somme += $prix;
} while ($prix != 0);

// Affichage de la somme total
echo "Prix total : ". $somme."\n";

// Saisie du montant versé
echo "\n";
$verse = readline("Montant versé : ");
$rendu = $verse - $somme;

// Affichage de la monnaie rendu
echo "\n";
echo "Nous vous rendons ". $rendu. " soit : \n";

// Tableau des billets de 5 et de 10
$monnaie = ["10" => 0, "5" => 0];

// On compte le nombre de billet à rendre
while ($rendu >= 10)
{
    $rendu -= 10;
    $monnaie["10"] += 1;        // On augmente la valeur liée à la case
}
while ($rendu >= 5)
{
    $rendu -= 5;
    $monnaie["5"] += 1;
}


// Affichage des billets de 10 et de 5
foreach($monnaie as $billet => $valeur)     
{
    echo " Billet de ". $billet. " : ". $valeur."\n";   
}

// Affichage du reste
echo "Pièce de 1 euros : " . $rendu. "\n";