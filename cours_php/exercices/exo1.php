<?php
header('content-type: text/plain');
$programming_language='PHP';
$php_version=phpversion();
$course_length=32;

echo "Ceci est mon premier exercice en $programming_language.\n";
echo "Le cours de la chaine FormationVidéo compte $course_length vidéos publiées.\n";
echo "Au travers des vidéos suivies, j'ai pu installer $programming_language dans sa version $php_version";

