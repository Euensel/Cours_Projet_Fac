<?php

//include 'utils.php';
/*
    include :inclut le contenu d'un fichier à l'endroit où on fais l'inlcusion
    include_once : on ne va pas inclure un fichier qui a déjà été inclu

    require : stop complètement le si le fichier n'est pas inclus alors d'include renvoi une erreur
    require_once
*/
//hello();
require 'haut.php';
echo "<p>Je suis le fichier index.php</p>";
require 'bas.php';
?>