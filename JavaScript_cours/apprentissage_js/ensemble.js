/*
    ->Un ensemblepermet de regrouper des elements qui ont une valeur unique

    size()->compte le nombre d'élement
    add()->ajouter des elements
    delete()->supprime un element
    clear()->vider l'ensemble
    has()->chercher un element en particulier
    keys()
    entries()
    values()
*/

let someSet=new Set([1,2,3]);
for(element of someSet)
    document.writeln("<p>"+element+"</p>");

if(someSet.has(2))
    document.writeln("On est content");


const intervalues=someSet.values();
document.writeln(intervalues.next().values);
document.writeln(intervalues.next().values);//afficher les elements un à un sous forme de suite

function show(value)
{
    document.writeln("<p>"+value+"</p>");

}
someSet.forEach(show);