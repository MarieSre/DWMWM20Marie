<?php
$ht=readline("Prix HT :");
$nb=readline("Nombre d'articles :");
$tva=readline("Taux de TVA :");
    $ttc=$ht*$nb*(1+$tva);
        echo "Le prix TTC est de : $ttc";