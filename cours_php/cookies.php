<?php
    
        setcookie('lang','fr',time() +3600 * 24* 365,null,null,false,true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1>Les cookies en PHP</h1>
    <p>Langue de l'utilisateur : <?=htmlspecialchars($_COOKIE['lang'])?></p>
</body>
</html>