
/*
    LES TERNAIRES
        <condition> ? <cas vrai> : <cas faux>
*/
let number=3;

if(number<0)
    document.writeln("<0");
else if(number<=10)
    document.writeln("0<=10");
else document.writeln(">10");

let number2=6;
switch(number2)
{
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        document.writeln("number<5");
        break;
    case 5:
        document.writeln("number==5");
        break;
    default:
        document.writeln("pas dispo");
        break;
}

let number3 =15;
let res=(number>10)? "number3>10":"number<=10";
document.writeln(res);


