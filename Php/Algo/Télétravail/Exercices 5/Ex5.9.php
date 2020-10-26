<?php

require "../FonctionsTableaux.php";


$somme = 0;

// Saisie des prix de l'articles
do
{
   $prix = demandeEntier("Prix de l'article : ");
   $somme += $prix;
}while($prix != 0);

// Affichage de la somme
echo "\nCela fait un total de ". $somme. " euros.\n";

// Affichage de l'argent payé
echo "\n";
$montant = demandeEntier("Montant versé : ");
echo "\n";
$rendu = $montant - $somme;

// Affichage du nombre de billet à rendre
echo "Nous vous rendon : ". $rendu. " euros, soit : \n";
$b10 = 0;
$b5 = 0;

// On compte le nombre de billet à rendre
while($rendu >= 5)
{
    if($rendu >= 10)
    {
        $rendu -= 10;
        $b10++;   
    }
    else
    {
        $rendu -= 5;
        $b5++;  
    }
}

// Affichage du rendu
echo "Billet(s) de 10 euros : ".$b10."\nBillet(s) de 5 euros : ".$b5."\nPièce(s) de 1 euros : ". $rendu;