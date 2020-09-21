<?php

require "FonctionsTableaux.php"; //Appel des fonctions se trouvant dans ce fichier

$tab1 = creerTableauTermineParZero(); // Crée un tableau qui demande une saisie utilisateur et qui s'arrête lorsqu'il saisi 0

for ($i = 0; $i < count($tab1); $i++) {  
    $tab2[$i]= $tab1[$i]++; //Ajoute + 1 à chaque valeur du tableau
}

echo afficheTableau($tab1); //Affiche le premier tableau sans incrément
afficheTableau($tab2);  //Affiche les valeurs du premier tableau +1