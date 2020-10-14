<?php
$n[0]=1;
for ($k=1; $k<6; $k++){
    $n[$k]=$n[($k-1) +2];
} for ($i=0; $i<6; $i++){
    echo $n[$i];
}/*Cet exercice stock les premiers nombre impair*/
/*On peut l'optimiser en incluant echo dans la première boucle*/