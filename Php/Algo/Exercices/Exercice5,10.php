<?php 
//M.S Cet exercice reprend le principe des paris sportif hippique (Tiercé, quarté et quinté)
function factorielle($nombre) //calcule la factorielle d'un nombre **
{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 1; $i <= $nombre; $i++)
    {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
} 

$partant=readline("Nombre de chevaux partant :");
$joues=readline("Nombre de chevaux joués :");

    echo "Arrivé dans l'ordre :". factorielle($partant) / factorielle($partant - $joues)."\n";                                 //Appel de la fonction factorielle pour calculer l'arrivée des chevaux dans l'ordre
        echo "Arrivé dans le désordre :". factorielle($partant) / (factorielle($joues) * (factorielle($partant - $joues)));     //Appel de la fonction factorielle pour calculer l'arrivée des chevaux dans le désordre