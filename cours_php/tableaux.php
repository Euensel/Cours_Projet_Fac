<?php
/*
    Fonctions usuelles pour les tableaux
        >array_push() ajoute un élement à la fin du tableau
        >array_pop() retire la premiere valeur d'un tableau 
        >array_shift() retire une valeur dans le sens inverse
        >in_array vérifie si une valeur est dans un tableau

*/
//$tab_integers=array();//tableau vide
$tab_integers=[
    10,
    11,
    12,
    13,
    14,
    15
];//autre synthaxe
echo '<pre>';
print_r($tab_integers);
echo '<pre>';
//définier les clés nous meme(tableau associatif)
$tab=[
    1=>10,//clé=>valeur
    "ok"=>[5,6,4],
    10=>12,
    "bonjour",
    date("Y-m-d"),
    3.14
];
echo '<pre>';
print_r($tab);
echo '<pre>';
$tab_population=[
    "PARIS"=>14000,
    "NEW-YORK"=>20000,
    "MOSCOU"=>45700
];
echo '<pre>';
print_r($tab_population);
echo '<pre>';
echo '<p>'.$tab_population["MOSCOU"].'</p>';//afficher la valeur de la clé moscu du tableau
$tab_population["PARIS"]=120;//modifier la valeur d'une des clé dans un tableau
echo $tab_population["PARIS"];

//Boucle foreach 
//foreach($tab_population as $data)//pour chaque valeur du tableau on va les stocker dans data
foreach ($tab_population as $key => $value)//recupère les clés et les valeurs du tableau
    echo "$key/$value"
?>

