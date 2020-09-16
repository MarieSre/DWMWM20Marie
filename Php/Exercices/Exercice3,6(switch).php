<?php
$a = readline("Entrer l'âge de l'enfant :\n");
while (ctype_alpha($a)) {
    $a = readline("Veuillez entrer un nombre et non une lettre :\n");
}
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
