<?php

$n = 5;
$tab = [10, 30, 40, 5, 20];

for ($i = 0; $i < $n - 1; $i++) {
    $mini = $tab[$i];
    $pos = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($tab[$j] < $mini) {
            $mini = $tab[$j];
            $pos = $j;
        }

    }
    
$tab[$pos] = $tab[$i];
$tab[$i] = $mini;

}

afficheTableau($tab);