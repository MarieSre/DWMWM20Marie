<?php
// M.S

$val = 1;

for ($i = 0; $i <= 1; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $tab[$i][$j] = $val;
        $val = $val + 1;
        echo $tab[$i][$j]. "\n";
    }
}

// Le programme incrémente la variable $val de 1 à chaque tour