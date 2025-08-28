
<?php
function FV_html_p(string $text):string
{
    if (empty($text))
        die("Vous devez renseignez du texte pour le paragraphe");

    return "<p>$text</p>";

}
function FV_html_head(string $title="Ma page web"):string
{

    $html="<head><meta charset='uft-8'>";
    $html.="<title>$title</title></head>";
    return $html;

}
function FV_html_a(string $href,string $text,string $title=""):string
{
    if(empty($href)||empty($text))
        die("PARAM7TRES INCORRECTS.");
    $html='<a href="'.$href.'"';
    if(!empty($title))
        $html.='title="'.$title.'"';
    $html.='>'.$text.'</a>';
    return $html;
   
}

function FV_html_render(string $title=""):string
{
    $html='<!DOCTYPE html>';
    $html.='<html lang="fr">';
    $html.=FV_html_head("Mon blog");
    $html.='<body>';
    $html.=FV_html_p('Rendez vous sur :'.FV_html_a("https://jasonchampagne.fr","Lien"));
   return $html;
}
echo FV_html_render();
?>