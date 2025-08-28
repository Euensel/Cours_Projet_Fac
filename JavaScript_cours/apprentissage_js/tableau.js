/*




*/

let someArray = Array.of("Salim","Paul","Eureka","Ben");


document.writeln(someArray.at[someArray.length-1]);


for (let i=0;i<someArray.length;++i)
    someArray[i]="inconnu";
for(value of someArray)
    document.writeln(value);
for(index in someArray)
    document.writeln(index);

someArray.forEach(value=>document.writeln(value));

let s="salut à tous !";
let table_array=s.split(' ');
document.writeln(table_array);

s=table_array.join(' ');
console.log(s);

someArray.push("Maria","Mathis");


document.writeln(someArray.indexOf("Salim"));

document.writeln(someArray.lastIndexOf("Salim"));

document.writeln(someArray.includes("Salim"));

let results=someArray.find(value=>value.length>1);

document.writeln(results);

let result=someArray.findIndex(value=>value.length>1);

document.writeln(result);

anotherArray=["Lana","Mia","Jonathan"];

document.writeln(someArray.concat(anotherArray));

document.writeln(someArray.sort());

let numberArray=[-2,-5,0,8,90,45,-89,13,17];
document.writeln(numberArray.filter(x=>x>0));