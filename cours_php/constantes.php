<?php
define("PSEUDO_ADMIN","Eureka");
echo PSEUDO_ADMIN;
$prenom="Eureka";
define("PRENOM",$prenom);
echo PRENOM;
define("PI",3.14);
echo PI;

echo PHP_INT_MAX;

echo PHP_INT_MIN;

echo PHP_INT_SIZE;

const PI=3.14;
echo PI;
const REGULAR=45;
echo 'REGULAR='.REGULAR;
/*
une constante en php peut etre définit avec define qui prend deux paramètres le premier étant le nom de la constante et le second la valeur que prend la constante


PHP a également des constante déjà définit:
    PHP_INT_MAX :nombre maximum que l'on peut insérer
    PHP_INT_MIN: nombre minimum que l'on peut insérer
    PHP_INT_SIZE: nombre d'octet sur lesquels on boss


on peut également utiliser le mot clé const suivit du nom de la constante puis d'un égal puis la valeur à noter que cette synthaxe n'est pas à utiliser dans une boucle ou une fonction on la met souvent tout en haut avant de commencer véritablement le code
à noter également qu'on peut concatener une constante avec du texte
*/