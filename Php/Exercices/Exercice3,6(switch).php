<?php
$a = readline("Entrer l'âge de l'enfant :\n");
while (ctype_alpha($a)) { //Normallement, on ne met pas de ctype_alpha pour une condition
    $a = readline("Veuillez entrer un nombre et non une lettre :\n"); //On demande à l'utilisateur de recommencer sa saisie s'il n'a pas entré un nombre
    switch ($a) {
        case '6':
        case '7':
            echo "Poussin";
            break;
        case '8':
        case '9':
            echo "Pupille";
            break;
        case '10':
        case '11':
            echo "Minime";
            break;
        case '12':
        case '13':
            echo "Cadet";
            break;
        default:
            echo "Autre";
            break;
    }
}
