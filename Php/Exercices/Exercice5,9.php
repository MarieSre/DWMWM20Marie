<?php
//M.S Cet exercice reprend le principe d'une caisse de supermarché
$somme=0;
$prix=1;
        /*Saisi du prix de l'article*/
do {
    $prix=readline("Entrer le prix de l'article :");
        $somme= $somme +$prix;
}while ($prix !=0);
 
    echo "Le prix total est de :" .$somme ."€\n";               /*Affichage du prix total*/
    $montant=readline("Montant versé :");                      /*On demande à l'utilisateur combien d'argent il a donné*/
        $rendu=$montant-$somme;
        
    echo "Montant rendu :" .$rendu ."\n";                       /* Affichage de l'argent rendu au client*/
        $bd10=0;
        $bd5=0;
    while ($rendu>=10){                                            
        $rendu=$rendu-10;                                 
        $bd10++;}                               /*} Cette partie va permettre de calculer le nombre de billet de 10 euros, de 5 euros ainsi que le restant de monnaie qu'il faut rendre*/
     while ($rendu>=5){
        $rendu=$rendu-5;
        $bd5++;
     
    } 
    echo "Billet de 10 € :" .$bd10. "\n";                        /*Affichage des billets de 10 et de 5 euros ainsi que la monnais rendu*/
        echo "Billet de 5€ :" .$bd5 ."\n";
            echo "Pièce d'un euro :" .$rendu;
