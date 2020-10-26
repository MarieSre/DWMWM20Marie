<?php
// M.S

// Saisie de trois noms
$nom1 = ucfirst(readline("Entrer un premier nom : "));
$nom2 = ucfirst(readline("Entrer un second nom : "));
$nom3 = ucfirst(readline("Entrer un troisième nom : "));

// On test dans quel ordre ils sont rangés
if(($nom1 < $nom2) && ($nom1 < $nom3) && ($nom2 < $nom3))
{
    echo "Ordre alphabétique";
}
else
{
    echo "Ordre non alphabétique";
}