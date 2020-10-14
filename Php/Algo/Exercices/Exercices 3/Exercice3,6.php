<?php
$a = readline("Âge de l'enfant ? :");
if (ctype_alpha($a)) {
    echo "Veuillez entrer un nombre et non une lettre.";
} else if ($a <= 7) {
    echo "Poussin";
} else if ($a <= 9) {
    echo "Pupille";
} else if ($a <= 11) {
    echo "Minime";
} else if ($a >= 12) {
    echo "Cadet";
}
