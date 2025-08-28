<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <legend>Calculatrice Simple</legend>
    <div class="formulaire">
        <form method="post" action="traitement.php">
            
            <input type="number" name="nombre1" placeholder="Saisir le premier nombre : " >
            <input type="number" name="nombre2" placeholder="Saisir le deuxieme nombre : ">
            <input type="text" name="operateur" placeholder="Saisir l'opérateur(+,-,*,/) : ">
            <input type="submit" value="Calculer" class="bouton">
        </form>
    </div>
</body>
</html>