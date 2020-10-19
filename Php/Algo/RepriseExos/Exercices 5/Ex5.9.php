<?php

//M.S

require "../FonctionsTableaux.php";

$somme = 0;

// Saisie des prix de l'articles
do
{
    $prix = demandeEntier("Entrer le prix de l'article : ");
    $somme += $prix;
}while ($prix !=0);

// Affichage de du prix total
echo "\nCela fait ". $somme. " euros\n";

// Affichage de l'argent versé
echo "\n";
$montant = demandeEntier("Montant versé : ");
echo "\n";
$rendu = $montant - $somme;

// Nombre de billets et de monnaie à rendre
echo "Nous vous rendons : ". $rendu . " euros, soit : \n";
$bd10 = 0;
$bd5 = 0;

// On compte le nombre de billet à rendre

while ($rendu > 5)
{
    if ($rendu >= 10)
    {
      $rendu -= 10;
      $bd10++;  
    }
    else if ($rendu >= 5)
    {
        $rendu -= 5;
        $bd5++;
    }
}

// OU

// while ($rendu >= 10)
// {
//     $rendu -= 10;
//     $bd10++;
// }
// while ($rendu >= 5)
// {
//     $rendu -= 5;
//     $bd5++;
// }

// Affichage de la monnaie rendu
echo "Billet(s) de 10 euros : ". $bd10 . "\nBillet(s) de 5 euros : ". $bd5 . "\nPièce(s) d'1 euro : ". $rendu;

