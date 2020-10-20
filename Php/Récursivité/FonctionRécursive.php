<?php

function motRetourne($mot)
{
    
    if (strlen($mot) == 1) // Condition d'arrêt
    {
        return $mot;
    } else
    {
        return ($mot);
    }
}
echo motRetourne("bonjour");