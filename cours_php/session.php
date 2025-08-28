<?php
/*
les sessions permettent d'enregistrer des informations en cours pendant une certaine durée 

    session_name() modifie le nom d'une session
    session_write_close supprime complètement la session
    session_status()    ->0(ou PHP_SESSION_DISABLED)
                        ->1(PHP_SESSION_NONE)
                        ->2(PHP_SESSION_ACTIVE)
*/
/*PHPSESSID */
/*session_start();/*Démmarage de la session */
/*$_SESSION['username']='eurekaeale';

unset($_SESSION['username']);/*supprime la session */
/*session_destroy();/*Fermeture de la session */
if(!session_id())
{
    session_start();
    session_regenerate_id(true);/*regenère la session à true*/
}
//On fait des choses avec les sessions

session_unset();/*ferme toutes les variables de la session */
session_destroy();


    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,null,null,false,true);
    session_regenerate_id(true);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours php</title>
</head>
<body>
    <h1>Sessions en php</h1>
    <p>Bonjour <?=htmlspecialchars($_SESSION['username'])?></p>
</body>
</html>
