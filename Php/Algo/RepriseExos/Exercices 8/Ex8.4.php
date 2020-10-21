<?php
// M.S

for($k = 0; $k <= 3; $k++)
{
    for($m = 0; $m <= 1; $m++)
    {
        $t[$k][$m] = $k + $m;
        echo $t[$k][$m]. "\n";
    }
}
// Le programme boucle en prenant la valeur de $k, il rajoute la valeur de $m en les additionnant pour les ranger dans le tableau