<?php
// M.S

// Saisie de l'âge et du genre de l'enfant
$age = readline("Quel âge a votre enfant ? ");
$genre = readline("Est-ce une fille ou un garçon ? ");

//On établie les différentes catégories

if ($genre == "fille")
{
    if ($age < 6)
     {
     echo "Votre enfant a accès à l'espace bleu ou rouge";
     }
     else if ($age <= 12)
     {
         echo "Votre enfant a accès à l'espace rose ou rouge";
     }
}
else
{
    if(($age < 6) || ($age > 10))
    {
        echo "Votre enfant a accès à l'espace bleu";
    }
    else if ($age <= 8)
    {
        echo "Votre enfant a accès à l'espace rouge, vert ou bleu";
    }
    else
    {
        echo "Votre enfant a accès à l'espace rouge ou bleu";
    }
}





