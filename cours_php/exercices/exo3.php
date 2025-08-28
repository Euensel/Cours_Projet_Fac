<?php
$min=1;
$max=50;
$i=0;
do
{
    if ($min%5!=0){
        echo $min.'<br>';
    }
    elseif ($i==0 && $min%5==0){
        echo "TIC".'<br>';
        $i+=1;
    }
    elseif($i==1 && $min%5==0){
        echo "TAC".'<br>';
        $i-=1;
    }
    $min++;
    
}
while($max>=$min);

?>