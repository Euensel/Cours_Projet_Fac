<?php
/*
$number=0;
while($number<10)
{
    echo '<p>'. $number.'<p>';
    $number++;
}
*/
$number=10;
do{
    echo '<p>'. $number.'<p>';
    $number++;
}
while($number<10);
for($i=0;$i<10;$i++)
{
    echo "Je suis une phrase...<br>";
}
for($i=0;$i<10;$i++)
    for($j=0;$j<10;$j++)
    break 2;//break 2 signifie arrete la boucle et la boucle dans laquelle elle est break (break 1 par défaut)
$number2=0;
while($number2<10)
{
    $number2++;
    if($number2==5)
        continue;
    echo '<p>'.$number2.'</p>';
}
?>

