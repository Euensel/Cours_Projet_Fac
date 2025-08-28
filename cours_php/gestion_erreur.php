<?php

/*
    error_reporting:cette fonction est utilisé pour gérer les erreurs qui doivent s'afficher on met en valleurs 0 si on veut masquer toutes les erreurs et -1 si on veut afficher toutes les erreurs
    ini_set: egalement pour gérer l'affichage des erreurs prend deux valeurs "display_errors" et 1 si on veut tout afficher 0 si on ne veut rien afficher
 */
/*
 Gestionnaire d'erreur
    function error_handler(int $errno[erreur en soi],string string $errmsg[message d'erreur],string errfile [fichier],int $errline [ligne d'erreur],array $errdatas [tableau]) on peut juste utiliser les 3 ou 4 premiers
    E_USER_ERROR| E_USER_WARNIG| E_USER_NOTICE
 */
/*
-trigger error() utilisé pour donner une erreur si une condition n'est pas respectée càd provoquer nos propres erreurs
*/

error_reporting(-1);
ini_set("display_errors",1);
/* on peut eécire
function my_error_handler()
{

}
set_error_handler("my_error_handler"); ou*/
$my_error_handler=function(int $errno,string $errmsg,string $errfile,int $errline)
{
    
    switch($errno)
    {
        case E_USER_ERROR:
            echo $errmsg;
            break;
        case E_USER_WARNING:
            echo $errmsg.'sur le fichier'.$errfile;
            exit (1);/*quitter le programme*/ 
            break;
        case E_USER_NOTICE:
            echo $errmsg;
            break;
        default:
            echo 'ERREUR :'.$errmsg;
            break;
    }
};
set_error_handler($my_error_handler);
$age_personne=16;
if ($age_personne<18)
    trigger_error("Tu n'es pas majeurç! ", E_USER_WARNING);//alias(idem): user_error() 
restore_error_handler(); /* restaure le gestionnaire par defaut */

/* 
le système de log avec la fonction error_log() permet de pouvoir enregistrer tout ce qui s'est passer dans notre site dans des fichiers pour pouvoir verifier par exemple si une autre personne que l'admin s'est connecté à la page admin cela permet de pouvoir surveiller le système
*/
error_log("Y a eu un problème !",0);/* (la 1ère valeur est le message la deuxieme est l'endroit où l'erreur est envoyé) envoi une erreur dans l'historique de php */

error_log("Y a une erreur !",1,"admin@gmail.com");/*envoie un mail (on peut ajouter une 4 eme valeur pour spécifier l'expéditeur) */

error_log("y a un probleme",3,"error.log")/*enregistre dans un fichier */
?>