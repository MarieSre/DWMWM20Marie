<?php
//M.S

$c1 = readline("Scrutins du premier candidat :");
$c2 = readline("Scrutins du second candidat :");        // Saisi des scrutins des quatre candidat
$c3 = readline("Scrutins du troisième candidat :");
$c4 = readline("Scrutins du quatrième candidat :");

if ($c1 > 50) {                     // Lorsque le premier candidat récolte plus de 50% des scrutins, il est élu
    echo "Le premier candidat est élu dès le premier tour";
} else if ($c1 < 12.5) {            // Seul les candidats ayant obtenu au moins 12.5% participe au second tour
    echo "Le premier candidat est éliminé"; 
} else if (($c2 > 50) || ($c3 > 50) || ($c4 > 50)) {        // Si l'un des autres candidats obtient plus de 50% des scrutins, il est élu
    echo "Le premier candidat est éliminé";
} else if ($c1 > $c2 && $c1 > $c2 && $c1 > $c3 && $c1 > $c4) {          // Le premier candidat est en tête du second tour
    echo "Le premier candidat est en ballotage favorable";
} else {                                                        // Le premier candidat n'est pas en tête du second tour
    echo "Le premier candidat est en ballotage défavorable";
}

/* Tableau des variables :

c1|c2|c3|c4
54|24|25|25 => gagné
50|25|25|25 => favorable
25|53|24|25 => perdu
25|25|25|25 => défavorable
26|24|25|25 => favorable
10|35|25|25 => perdu
30|15|40| 9 => défavorable
50| 0|50| 0 => défavorable */