<?php //calcul du tarif d'un assuré selon differénts paramètres : l'age, l'age du permis, le nombre d'accidents, son ancienneneté
$couleur =["rouge","orange","vert","bleu"]; //tableau pour pouvoir permettre plus facilement le choix de la couleur du tarif
$age = intval(readline("Age de l'assuré : "));
$permis_age = intval(readline("Age du permis : ")).
$accident = intval(readline("Nombre d'acidents responsable de l'assuré : "));//entrée des parametres de l'assuré
$color = 0; // valeur par défaut, n'a pas d'incidence sur le programme
{
if(($age<25)&&($permis_age<2)){
    $color = 0;
}
else if (($age>=25)&&($permis_age>=2)){
    $color = 2;
}
else $color = 1;
}
$color = $color-$accident;
if ($color<0){echo("Non assurable");}
else{
    $anciennete = intval(readline("Ancienneté de l'assuré : ")); 
    if($anciennete>5){//prise en compte de l'ancienneté de l'assuré
        $color++;
    }
    echo("Vous êtes au tarif $couleur[$color]");
}