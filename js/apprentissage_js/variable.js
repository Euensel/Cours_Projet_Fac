/*
    document.write()    ->affiche un message
    alert()             ->affiche une popop
    confirm()           ->affiche un bouton de confirmation
    prompt()            ->saisi du user
    parseInt()          ->met la valeur en type number
    parseFloat()        ->type float
    const:  valeur constante non mofiable pour les nombres, chaines,booleens...
            type de donnée constant mais contenu modifiable pour les tableaux, objets...

*/

var age=12;
confirm("confirmer")
document.writeln(age);
document.writeln(typeof(age));//typeof recupère le type d'une variable

var name =prompt("Comment vous vous appellez ? ");
document.writeln(name);

var age2=prompt("Quel age as-tu ?");
age2=parseInt(age);//recupere la valeur comme un type number pour par exemple faire des calcul after
document.write(typeof age2);

const PI=3.14;