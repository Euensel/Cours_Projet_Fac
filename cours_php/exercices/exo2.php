<?php
$pokeName="Pikachu";
$pokeLevel=5;
$pokeLevel+=1;
echo "$pokeName vient de monter au niveau $pokeLevel.<br>";
echo "A few moments later...<br>";
$pokeLevel+=1;
echo "Woah dingue ! $pokeName passe au niveau $pokeLevel ! <br><br>";


$pokeballCapture=50;
$bonusRate=6;
$minima=$bonusRate*$pokeballCapture/100;
$totalCaptureRate=$minima+$pokeballCapture;
echo"Le taux de capture est de $totalCaptureRate %";
?>