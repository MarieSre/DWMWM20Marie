<?php
// M.S

$somme = 0;
$prix = 1;

// Saisie du prix de(s) (l')article(s)
do{
    $prix = readline ("Entrer le prix de l'article :");
    $somme = $somme + $prix;
}while ($prix !=0);

// Affichage du prix total des articles

echo "Le prix total est de :". $somme. "€\n";

$montant=readline("Montant versé :"); // Saisie par l'utilisateur de l'argent versé
$rendu = $montant - $somme;

echo "Montant rendu :". $rendu . "\n"; // Affichage de la monnaie rendu
$b10 = 0;
$b5 = 0;

//Calcul du nombre de billets et de monnaie rendu

while ($rendu>=10)
{
    $rendu = $rendu - 10;
    $b10++;
}
while ($rendu>=5)
{
    $rendu = $rendu - 5;
    $b5++;
}
// Affichage de l'argent rendu

echo "Billet de 10 € :". $b10. "\n";
echo "Billet de 5 € :". $b5."\n";
echo "Pièces d'un euro :". $rendu;
