<?php

// M.S

do{
    $nb = readline("Entrer un nombre :");  // Saisi d'un nombre
    if ($nb < 1) {          
        echo ("Veuillez entrer un plus grand nombre\n");
    } else if ($nb > 3){
        echo ("Veuillez entrer un plus petit nombre\n"); 
    }
}while (($nb < 1) || ($nb > 3));
echo "Nombre valide";




/*
for ($i = 0; $i < 1; $i++) {            // On répète tant que la saisie est invalide
    $nb = readline("Entrer un nombre :");  // Saisi d'un nombre
    if (($nb < 1) || ($nb > 3)) {          

        echo ("Veuillez entrer un nombre entre 1 et 3 :\n");

    } else {
        echo "Ce nombre est valide";
    }

} */ // Note à sois même : ne pas mettre le readline en dehors de la boucle
