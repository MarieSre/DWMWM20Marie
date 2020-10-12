<?php
// M.S

// Saisi du nombre de suffrage des candidats

$c1 = readline("Entrer le nombre de suffrage du premier candidat : ");
$c2 = readline("Entrer le nombre de suffrage du seconnd candidat : ");
$c3 = readline("Entrer le nombre de suffrage du troisème candidat : ");
$c4 = readline("Entrer le nombre de suffrage du quatrième candidat : ");

if ($c1 > 50) {		// Elu s'il récolte plus de 50% des suffrages
	echo "Le premier candidat est élu dès le premier tour";
} else if ($c1 < 12.5) {		// Eliminé s'il ne récolte pas au moins 12,5% des suffrages
	echo "Le premier candidat est éliminé";
} else if (($c2 > 50) || ($c3 > 50) || ($c4 > 50)) {	// Eliminé si les autres candidats récolte plus de 50%
	echo "Le premier candidat est éliminé";
} else if (($c1 > $c2) && ($c1 > $c3) && ($c1 > $c4)) { 	// Il se retrouve en tête au second tour s'il a plus de suffrages que les autres
	echo "Le premier candidat est en ballottage favorable";
} else {		// Sinon il n'est pas en tête
	echo "Le premier candidat est en ballottage défavorable";
}

// Tableau de variable
// c1 c2 c3 c4
// 52 20 12 12 élu
// 40 19 36 12 ballottage favorable
// 14 51 36 45 éliminé
// 13 10 39 46 ballottage défavorable
//  9 50 49 36 éliminé
