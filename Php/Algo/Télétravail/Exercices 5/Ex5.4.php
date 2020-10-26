<?php
// M.S

require "../FonctionsTableaux.php";

$n = demandeEntier("Entrer un nombre à multiplier : ");

for($i = 1; $i <= 10; $i++)
{
    echo $n. " x ". $i . " = ". $n * $i."\n";
}