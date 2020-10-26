<?php
// M.S

// Appel de la fonction demandeEntier
require "../FonctionsTableaux.php";
// Saisie de l'âg l'enfant

$age = demandeEntier("Quel âge a votre enfant ? ");

// On définit les différentes catégories
switch($age)
{

    case '6':
    case '7': 
        echo "Poussin";     // Si l'enfant a entre 6 et 7 ans
    break;
    
    case '8':
    case '9': 
        echo "Pupille";     // Si l'enfant a entre 8 et 9 ans
    break;

    case '10':
    case '11': 
        echo "Minime";      // Si l'enfant a entre 10 et 11 ans
    break;

    case '12':
    case '13':
        echo "Cadet";       // Si l'enfant a entre 12 et 13ans
    break;

    default:
        echo "Autre catégories";        // Si l'enfant est trop jeune ou trop agé
    break;
}
// Cet exercice est réalisable avec des conditions