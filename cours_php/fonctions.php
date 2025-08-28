<?php
/*  Caractéristiques d'une fonction:
        -Une fonction possède un nom
        -Elle peut avoir des paramètres
        -Elle peut retourner un résultat
    Types de paramètres :
        array
        callable
        bool
        int
        float
        string
 */
/*
 function hello($name)
 {
    echo "Bonjour !".$name;
 }
 $name="Eureka";
//appel de la fonction

hello($name);*/
/*
function modify_variable($var)
{
    $var="hacked";

    return $var;
}æ
$var="Ok";
$var=modify_variable($var);
echo $var;*/

/*function ma_fonction($nb1,$nb2)
{
    return $nb1+$nb2*3;
}
$nb1=2;
$nb2=2;
echo ma_fonction($nb1,$nb2);*/
/*
function ma_fonction(&$number)//passage par référence (pointeurs en C change la variable de la fonction principale directement dans la fonction)
{
    $number=7;
    return $number;
}
$number=9;
echo ma_fonction($number);
function maFonction(int $var1,string $var2="truc")
{

}
maFonction(14);*/

//appel d'une fonction avec plusieurs variables
function sum(...$numbers)
{
    $res=0;
    foreach ($numbers as $nb)
        $res+=$nb;//$res=$res+$nb
    echo $res;
}
$number1=14;
$number2=4;
$number3=8;
sum($number1,$number2,$number3);
//on peut gérer le type de paramètre mais aussi le type de retour 
$nombre=14;
function somme(int $nb1):string//type du retour
{
    return 10;
}
echo gettype(somme($nombre));

function appel()
{
    echo "bonjour";
}
$coucou="appel";
$coucou();//appel()
$hey=function()//fonction anonyme 
{
    echo "Salut";
};
$hey();