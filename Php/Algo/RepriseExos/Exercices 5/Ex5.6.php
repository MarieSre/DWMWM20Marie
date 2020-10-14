<?php
// M.S

// Saisie d'un nombre
function demandeEntier($invite) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($invite);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

$nb = demandeEntier("Entrer un nombre : ");

$facto = 1;

echo "1";
for($i = 2; $i <= $nb; $i++)        // Calcul de la factorielle
{
    $facto = $nb* $i;
    echo " x ".$i;
}
// Affichage

echo " = ". $facto;



