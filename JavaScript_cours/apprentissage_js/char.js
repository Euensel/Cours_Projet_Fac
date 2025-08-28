/*
    charAt(),[]
    length
    concat()
    starsWith(),endsWith()
    padStart(),padEnd()
    trim(),trimStart(),trimStart(),trimEnd()
    indexOf()
    includes()
    repeat()
    replace(),replaceAll()

    toLowercase(),toUpperCase()

    substring(), slice()

    split()
*/


let s ="Arbre";

document.writeln(s.charAt(0));//pour récupérer un élément précis d'une chaine

document.writeln(s.length);//longeur de la chaine

document.writeln(s.charAt(s.length-1));//si on a la flemme de compter les caracteres à la main oure afficher un element precis

document.writeln(s[0]);//pareil que charAt
document.writeln(s[s.length-1]);//la flemme....

let s1="Tom"
document.writeln("Bonjour"+s1+",comment vas-tu ?");//concatenation
document.writeln(`Bonjour ${s1}, comment vas-tu ?`);//idem

let s2=" Bonjour, je suis en train d'apprendre à programmer en JavaScript.   ";

document.writeln(s2.concat("...."))//contacter la chainer entre () à la fin de la chaine s2

document.writeln(s2.starsWith("B"));

document.writeln(s2.endsWith("."));

document.writeln(s2.padStart(10,"."));

document.writeln(s2.trim());

document.writeln(s2.indexOf(","));

document.writeln(s2.includes("JavaScript"));

let s3="Bonjour";
document.writeln(s3.repeat(3));


document.writeln(s1.replace("o","a"));
document.writeln(s1.replaceAll("o","a"));

document.writeln(s1.toUpperCase());

document.writeln(s3.substring(3,7));

let s5="Salut à tous !";
let a=s5.split(" ");

document.writeln(a);