<p><a href="index.php">&laquo;retour à la Calculatrice </a></p>
<?php
if(isset($_POST['nombre1']) && !empty($_POST['nombre1']))
{
    $nombre1=$_POST['nombre1'];
}

if(isset($_POST['nombre2']) && !empty($_POST['nombre2']))
{
    $nombre2=$_POST['nombre2'];
}
if(isset($_POST['operateur']) && !empty($_POST['operateur']))
{
    $operateur=$_POST['operateur'];
    switch($operateur)
    {
        case '+';
            $resultat=$nombre1+$nombre2;
            break;
        case '-';
            $resultat=$nombre1-$nombre2;
            break;
        case '*';
            $resultat=$nombre1*$nombre2;
            break;
        case '/';
            $resultat=$nombre1/$nombre2;
            break;
    }
}
echo $resultat;