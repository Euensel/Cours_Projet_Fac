<?php
/*
AFFICHAGE   :
    <?php
    echo "bonjour";
    echo "bon","jour";
    echo ("bonjour");
    ?>
    <?="bonjour"?>

    <?php
    print "ok";

*/
/*
    4 types scalaires   :
        Booléen (boolean,bool,real)          : vrai (true)| faux (false)
        Entier (integer,int)            : 14,-13,12 300
        Flottant (float,double)         : 3.14,-14
        Chaine de caractères (string)   : 'bonjour',"bonjour le monde"
    4 types composés    :
        Tableau(array)
        Objet(object)
        Fonctions de rappel (callable)
        Itérateurs (iterable)
    2 types divers :
        Ressource (ressource)
        NULL (ou "null)
*/
/*
pour afficher une variable avec le nombre de caractere on utilise la fonction : var_dump($mavariable)
si on veut afficher le type on va faire : echo gettype(mavariable)
unset remet la variable à null
*/
$monPrenom = "Eureka";

echo "Mon prenom est $monPrenom";
$monNom ="Eale";
echo 'Mon nom est'.$monNom. '!';
$unBooleen=FALSE;
$unAutreBooleen=false;
$unEntier=13;
$unFlottant=3.56;
$unNombreBinaire=0b1111;
$unHexadecimal=0x35AC7;
$unOctadecimal=0754;
$rien=NULL;
$kdl=null;
var_dump($monNom);
echo gettype($mavariable);

$a="eureka";
$b=&$a;
echo $a.'<br>'.$b;


$b ="toto";
echo '<br>';
echo '<br>'.$b;

$unFlottant=14.78;
$entier=(int)$unFlottant;
echo $entier;

$unNombre=67;
unset($unNombre);
var_dump($unNombre);
?>
