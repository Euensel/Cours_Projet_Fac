<?php
declare(strict_types=1);
require 'util.php';
require 'settings.php';
$tab_pref=[];
if(isset($_POST['valid_form']))
{
    if(!empty($_POST['movie_form']) && !empty($_POST['serie_form']) && !empty($_POST['anime_form']) && !empty($_POST['music_form']))
    {
        $tab_pref['movie']=$_POST['movie_form'];
        $tab_pref['serie']=$_POST['serie_form'];
        $tab_pref['anime']=$_POST['anime_form'];
        $tab_pref['music']=$_POST['music_form'];
        save_userdata_into_file($tab_pref);
        echo '<p style="color:green">Vos données ont été enregistrer avec succès !</p>';
    }
}
//S'il existe déjà des données utilisateurs
if(userdata_file_exists())
    $tab_pref=get_userdata_from_file();
print_form($tab_pref);
?>

