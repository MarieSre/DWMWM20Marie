<?php
for ($i= 0 ; $i<9 ; $i++){
    $note=readline("Entrez les notes :");
    $tableau[$i]=$note;
    
} foreach ($tableau as $elt){
    echo $elt ." | "; //Affichage du tableau
} echo "\n"."La moyenne est de  : ". array_sum($tableau) / count($tableau);