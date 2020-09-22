<?php
//M.S Cet exercice reprend le principe du 6.8 si ce n'est qu'il fait ajouté 1 à chaque valeur
require "FonctionsTableaux.php"; //Appel des fonctions se trouvant dans ce fichier

$tab1 = creerTableauTermineParZero(); // Crée un tableau qui demande une saisie utilisateur et qui s'arrête lorsqu'il saisi 0

for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i]++; //Ajoute + 1 à chaque valeur du tableau
}
echo "\nPremier tableau :\n";
afficheTableau($tab1); //Affiche le premier tableau sans incrément

echo "\nTableau incrémenté :\n";
afficheTableau($tab2); //Affiche les valeurs du premier tableau +1

//Note à sois même: refaire l'exo avec creerTableauAvecTaille