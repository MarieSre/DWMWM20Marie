<?php
require "FonctionsTableaux.php";
$tab1 = creerTableauAvecTaille(8);
$tab2 = creerTableauAvecTaille(8); // } Crée deux tableaux de 8 cases
for ($i = 0; $i < 8; $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
echo afficheTableau($tab1);
echo afficheTableau($tab2);
for ($i = 0; $i < 8; $i++) {
    echo $tab3[$i] . "\t";
}
/*echo "Les sommes des valeurs des deux tableaux sont :" . $tab3[$i];*/
