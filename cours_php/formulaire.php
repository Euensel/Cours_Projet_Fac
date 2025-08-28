<p><a href="formulaire.html">&laquo;retour au formulaire </a></p>
<pre>
<?php
/*
    variable superglobales: $_GET (informations visibles dans l'url)
                            $_POST(informations non visibles dans l'url)

    URL en GET -> http://localhost:8888/apprentissage_php/index.php?var1=154&var2=bonjour&var3=ok

    fonctions de sécurité à chaque affichage
        htmlspecialchar($str): > protège les informations en remplaçant les balises html par des entités afin d'éviter des failles 2x2s
        htmlentities($str)
    fonctions pour que le formulaire est bien rempli
        isset(): vérifie qu'une variable existe et est non nulle
        empty(): vérifie qu'une variable est vide
        is_null():Vérifie qu'une variable est nulle (la variable doit exister)

        isset()+empty():
            TRUE -> chaine vide
                    FALSE
                    []
                    "0"
                    0
                    0.0

        isset()-> TRUE alors is_null -> FALSE

        isset()-> FALSE alors is_null -> TRUE
        
        isset(): FALSE ->   NULL
                            var $maVariable;
        empty(): FALSE ->   " "
                            TRUE
                            \0
*/
if (isset($_POST['user']) && !empty($_POST['user']))
    echo htmlspecialchars($_POST['user']);
if (isset($_POST['choice']) && !empty($_POST['choice']))
    echo htmlspecialchars($_POST['choice']);
?>
</pre>