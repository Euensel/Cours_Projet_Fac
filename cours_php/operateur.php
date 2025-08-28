<?php
/*
    Fonctions utiles : 
        intdiv(): division entière
        fmod(): modulo avec virgule s'il y alieu
    Arrthmétiques : +,-,*,/,*,**
    affectation :=,+=,-+,*=,%=
    concaténation: .,.=
    comparaison: 
        ==(égal à)
        ===(identique à : en valeur et en type)
        !=(différent de )
        !==(différence de valeur ou différence de type)
        <(inférieur à)
        > (suppérieur à)
        <=(inférieur ou egal à)
        >=(supérieur ou égal à)
        <=> (supérieur à ou égal à ou inférieur à ?):
            ->0(si A==B)
            ->-1(si A<B)
            ->1(si A>B)
    Logiques : and,&&,or,||,xor
        la différence entre and,&& et entre or,|| est que && et || ne prennent pas en compte l'ordre tandis que and et or prennent en compte l'ordre et donne la priorité au premier terme

        xor lui verifie que une et une seule valeur est vrai pas deux 
*/


$strA="Bonjour";
$strB="tout le monde";
echo $strA.$strB;
$chaine="";
echo $chaine;
$chaine.="A";
echo $chaine;
'<br>';

$a=true;
$b=true;
echo $a and $b;
$result=false||true;
echo $result;
?>
