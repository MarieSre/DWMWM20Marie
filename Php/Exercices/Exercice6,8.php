<?php
function demandeEntier($invite) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($invite);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}
function creerTableauTermineParZero()
{
    do{
        $nb = demandeEntier("Entrer une valeur :");
        if ($nb != 0 ) //evite que le dernier 0 entre dans le tableau
        {
            $tab[]=$nb;
        }
    }
    while ($nb != 0 );
    return $tab;
}
function afficheTableau($tab)
{
    echo "\n";
    foreach ( $tab as $elt)  // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt."\t";
    }
    echo "\n";
} $nb=demandeEntier("Entrer une valeur :");
$tab1=creerTableauTermineParZero($nb);

if($nb <=-1){
    echo "Nombre de valeurs négative :";
}
/*for ($i=0 ; $i<$nb ; $i++){
    if ($tab1<=-1){
    echo "Nombre de valeur négative :"."\n";
} else {
    echo "Nombre de valeur positive :";
}
}*/
afficheTableau($tab1);