<?php

    /*
        STRUCTURES CONDITIONELLES:
            if,elif,else
            switch
            ternaire
        Fonctions usuelles:
            is_bool()
            is_int()
            is_float()
            is_string()
    */

$numberA=14;
if($numberA!=45)
{
    echo "ok";
}
elseif($numberA==14)
{
    echo"very";
}
else{
    echo "aucun";
}
$number=1;
switch($number)
{
    case 1:
        echo "1";
        break;
    case 2:
        echo"2";
        break;
    case 3:
        echo "3";
        break;
    default:
        echo"pas valide";
        break;
}
/*
$jeu_lance=true;
$message='';
if($jeu_lance)
    $message="Le jeu est en route...";
else 
    $message="jeu éteint";
echo $message;
*/
/*
$jeu_lance=true;
$message='';
if(!$jeu_lance)
    $message="Le jeu est en route...";
else 
    $message="jeu éteint";
echo $message;
*/
$jeu_lance=true;
$message=($jeu_lance) ? "jeu en route" : "jeu eteint"; //les ternaires permet de verifier une condition
echo $message;
$maVarariable="ok";
if(isset($maVarariable)) //isset fonction qui vérifie qu'une variable existe
    echo "elle existe";
else
    echo "elle n'existe pas";
$maVarariable2="ah ok";
if (!isset($maVarariable2))
    echo "elle existe";
$res=$maVarariable2 ?? "elle n'existe pas";//?? opérateur qui joue le role de isset
echo $res;


