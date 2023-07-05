<?php
//programme qui fait rechercher un nombre aléatoire par comparaison plus grand, plus petit//

//Initialisation et variables//
$N =0;$Alea =0;$count =1; //N : saisie par l'utilisateur, Alea choisi par l'algo, count le compteur du nombre d'étapes
$min =intval(readline("Veuillez entrer une borne inférieure : "));
$max =intval(readline("Veuillez entrer une borne supérieure : "));//Bornes de l'intervalle de choix
$essai_max = 10;//Nombre maximal de tentatives
$Alea = rand($min,$max);
$N = intval(readline("Veuillez entrer un nombre compris entre $min et $max : "));//saisie du premire nombre

while( ($Alea!=$N)&&($count<$essai_max)){//boucle de recherche//
    $count++;
    if($Alea<$N ) {
        echo("Nombre supérieur au nombre cherché \n");
    }
    else {
        echo("Nombre inférieur au nombre cherché \n");
    }    
    $N = intval(readline("Veuillez entrer un nouveau nombre "));

}
if($count<$essai_max)
{
    echo("Bravo vous avez trouvé en $count étapes. Félicitations ! ");
} else echo("Vous avez perdu");

