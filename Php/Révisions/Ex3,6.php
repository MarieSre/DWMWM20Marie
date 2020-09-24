<?php

//M.S

$age = readline ("Quel âge a votre enfant ? "); // Saisi de l'âge de l'enfant

switch($age)
{
    case '6': // Si l'enfant a entre 6 à 7 ans il sera dans la catégorie des poussins
    case '7':
        echo "Poussin";
    break; 

    case '8':   // Si l'enfant a entre 6 à 7 ans il sera dans la catégorie des pupilles
    case '9':
        echo "Pupille";         
    break;

    case '10';  // Si l'enfant a entre 6 à 7 ans il sera dans la catégorie des minimes
    case '11';
        echo "Minime";
    break;

    case '12':  // Si l'enfant a entre 6 à 7 ans il sera dans la catégorie des cadets
    case '13':
        echo "Cadet";
    break;

    default:        // Si l'enfant est trop jeune ou trop âgé, il sera classé dans d'autres catégories
        echo "Autre catégorie";
    break;
}