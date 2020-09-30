<?php
// M.S

$t[0] = [0, 3, 6];
$t[1] = [1, 4, 7];
$t[2] = [2, 5, 8];

$tiret = "----";

for ($i = 0; $i < 3; $i++) // Tableau horizontale
{
    echo $tiret."\n";
    for ($j = 0; $j < 3; $j++) // Tableau verticale
    {

        echo "|". $t[$i][$j]. "|";
       
    } echo "\n";
}

/*for ($k = 0; $k <count($t); $k++)
    {
        echo $tiret;
    }*/

