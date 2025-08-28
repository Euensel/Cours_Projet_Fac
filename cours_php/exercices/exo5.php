<?php
function FV_array_get(int $numbers):array
{
    if ($numbers>100)
        die ("Pas plus de 100 éléments !!!");
    $tab=[];
    for($i=1;$i<=$numbers;$i++)
    {
        array_push($tab,$i);
    }
        
    return $tab;
}
function FV_array_print(array $tab):void
{
    foreach($tab as $numbers)
        echo $numbers.' ';
    
}
function FV_array_keep_nvalues(array $tab,int $length):array
{
    return array_slice($tab,0,$length);
}
function FV_array_reverse(array $tab):array
{
    $reverse_tab=[];
    for($i=count($tab)-1;$i>=0;--$i)
        array_push($reverse_tab,$tab[$i]);
        echo '<br>';
    return $reverse_tab;
}

$numbers=FV_array_get(20);
FV_array_print($numbers);
$numbers=FV_array_keep_nvalues($numbers,5);
$numbers=FV_array_reverse($numbers);
FV_array_print($numbers);