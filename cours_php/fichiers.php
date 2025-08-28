<?php
/*
    [MODE D'OUVERTURE]:
        [caractère] [accès] [placement sur le fichier] [création si le fichier n'existe pas ?] [Notes]
        r: lecture [début] [non] []
        r+: lecture+écriture [début] [non] []
        w: écriture [début] [oui] [réduit la taille du fichier à 0]
        w+: lecture+écriture [début] [oui]  [réduit la taille du fichier à 0]
        a:écriture [fin] [oui] [fonction fseek() n'a aucun effet]
        a+:lecture+écriture [fin] [oui]  [fonction fseek() que pour lecture]
        x:écriture [début] [oui] [si le fichier fopen() échoue -> E_WARNING]
        x+:lecture+écriture [début] [oui] [si le fichier fopen() échoue -> E_WARNING]
        c:écriture [début] [oui] [Si le fichier existe, n'est pas troqué]
        c+:lecture+écriture [début] [oui] [Si le fichier existe, n'est pas troqué]

    [RETOUR A LA LIGNE]:
        Windows: \r\n
        GNU/Linux: \n
        MacOS: \r
        pour éviter ces différenciation on va ajouter un b pour binaire après le mode d'ouverture (ex:rb ou ab+)
        dans ce cas on va utiliser des octet pour les retours à la ligne

*/
/*$infos=file("infos.txt");//recupère les infos d'un fichier dans un tableau
if($infos)
{
    echo '<pre>';
    print_r($infos);
    echo '<pre>';
}


$infos2=file_get_contents("infos.txt");//recupère les infos d'un fichier de texte
if($infos2)
{
   var_dump($infos2);
}
$myFile=fopen("infos.txt","r");


if(!$myFile)
    exit("ouverture du fichier impossible");//die()

/*while($str=fgetc($myFile))//fgetc recupère à chaque itération un caractère du fichier une fois qu'il n'y a plus de caractère elle retourne false
    echo $str;*/
/*while(!feof($myFile))//feof vérifie si on est à la fin d'un fichier 
    echo fgets($myFile);

if(!fclose($myFile))
    exit("Fermeture du fichier échouée");*/


//mode d'écriture

$myFile=fopen("infos.txt","w");

if(!$myFile)
    exit("ouverture du fichier impossible");//die()

fwrite($myFile,"Une nouvelle information\r");//fputs écrire dans un fichier

if(!fclose($myFile))
    exit("Fermeture du fichier échouée");


