<?php
/* Cet exercice reprend le principe des élections*/

$c1 = readline("Entrer le nombre de scrutins du premier candidat :"); //On demande le nombre de scrutins des quatre candidats
$c2 = readline("Entrer le nombre de scrutins du second candidat :");
$c3 = readline("Entrer le nombre de scrutins du troisème candidat :");
$c4 = readline("Entrer le nombre de scurtins du quatrième candidat :");

if ($c1 > 50) {
    echo "Le premier candidat est élu"; //Si le premier candidat à plus de 50% des scrutins, il est automatiquement élu
} else if ($c1 < 12.5) {
    echo "Le premier candidat est éliminé";
} else if ($c1 > $c2 && $c1 > $c3 && $c1 > $c4) {
    echo "Le premier candidat est en ballotage favorable";
} else {
    echo "Le premier candidat est en ballotage défavorable";
}
