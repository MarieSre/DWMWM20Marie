<?php
// M.S

$n1 = ucfirst(readline("Veuillez entrer un nom : "));
$n2 = ucfirst(readline("Veuillez entrer un deuxième nom : ")); // Saisi de trois lettres / noms par l'utilisateur
$n3 = ucfirst(readline("Veuillez entrer un troisième nom : "));

if (($n1 < $n2) && ($n1 < $n3) && ($n2 < $n3)) // Vérification de l'ordre alphabétique
{
	echo "Ordre alphabétique";
} else {
	echo "Ordre non alphabétique";
}
