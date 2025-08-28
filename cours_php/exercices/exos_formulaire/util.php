<?php
declare(strict_types=1);


function userdata_file_exists():bool
{
    return is_readable(USERDATA_FILE);
}
function get_userdata_from_file():array
{
    $userFile=fopen(USERDATA_FILE,'r');
    if(!$userFile)
        die("Erreur d'ouverture du fichier");
    $tab_pref=[];
    $tab_pref['movie']=fgets($userFile);
    $tab_pref['serie']=fgets($userFile);
    $tab_pref['anime']=fgets($userFile);
    $tab_pref['music']=fgets($userFile);

    fclose($userFile);
    
    return $tab_pref;
}

function print_form(array $tab_pref):void
{
    $movie = isset($tab_pref['movie']) ? $tab_pref['movie']: '';
    $serie = isset($tab_pref['serie']) ? $tab_pref['serie']: '';
    $anime = isset($tab_pref['anime']) ? $tab_pref['anime']: '';
    $music = isset($tab_pref['music']) ? $tab_pref['music']: '';
    echo '  
        <title>Formulaire</title>
            <link rel="stylesheet" href="style.css">
            <div class="formulaire">
                <form method="post" action="">
                    <input type="text" name="movie_form" placeholder="Quel est votre film préféré : " require >
                        <input type="text" name="serie_form" placeholder="Quelle votre série préférée : "require>
                        <input type="text" name="anime_form" placeholder="Quel est votre animé préféré : " require>
                        <input type="text" name="music_form" placeholder="Quelle est votre son favori : ">
                        <input type="submit" value="Enregistrer" name="valid_form" class="bouton">
                </form>
            </div>';
}
function save_userdata_into_file(array $tab_pref):void
{
    $userFile=fopen(USERDATA_FILE,'w');
    if(!$userFile)
        die("Erreur d'ouverture du fichier");
    fwrite($userFile,$tab_pref['movie']."\n");
    fwrite($userFile,$tab_pref['serie']."\n");
    fwrite($userFile,$tab_pref['anime']."\n");
    fwrite($userFile,$tab_pref['music']."\n");

    fclose($userFile);
}