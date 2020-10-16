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
$rendu = ["b10" => 0, "b5" => 0];






// Affichage
foreach($rendu as $billet => $valeur)
{
    echo "Billet de ". $billet. " : ". $valeur; 
}
echo "\n";