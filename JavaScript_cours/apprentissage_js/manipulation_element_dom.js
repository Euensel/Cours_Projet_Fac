/*
====================================================================================
📘 CHAPITRE : Sélection et manipulation des éléments DOM

🎯 Objectifs :
- Sélectionner des éléments HTML
- Modifier le contenu HTML ou textuel
- Gérer les attributs
- Créer, insérer et supprimer dynamiquement des éléments
====================================================================================

🔹 MÉTHODES DE SÉLECTION D'ÉLÉMENTS
- document.getElementById('id')                   → sélection unique
- document.getElementsByName('name')              → NodeList
- document.getElementsByTagName('tag')            → NodeList
- document.getElementsByClassName('class')        → HTMLCollection
- document.querySelector('css selector')          → 1er élément correspondant
- document.querySelectorAll('css selector')       → NodeList de tous les éléments

🔹 PROPRIÉTÉS DU CONTENU
- innerHTML       → contenu HTML intérieur
- outerHTML       → tout l’élément + son contenu
- innerText       → texte visible dans l’élément
- outerText       → l’élément remplacé par du texte (peu utilisé)
- textContent     → texte visible ou non dans l’élément

🔹 ATTRIBUTS HTML
- hasAttribute('name')            → booléen
- getAttribute('name')            → valeur actuelle
- setAttribute('name', 'value')   → change ou ajoute un attribut
- removeAttribute('name')         → supprime un attribut

🔹 CRÉATION ET INSERTION D’ÉLÉMENTS
- document.createElement('tag') → crée un nouvel élément
- node.append(el)               → ajoute à la fin
- node.prepend(el)              → ajoute au début
- node.before(el)               → avant l'élément
- node.after(el)                → après l'élément
- node.replaceWith(el)          → remplace complètement
- node.remove()                 → supprime du DOM

🔹 insertAdjacentHTML(position, html)
  - "beforebegin" → avant l’élément
  - "afterbegin"  → au début à l’intérieur
  - "beforeend"   → à la fin à l’intérieur
  - "afterend"    → juste après l’élément
====================================================================================
*/

// Sélections
const element = document.getElementById('coucou');
console.log(element);

const element2 = document.getElementsByName('user_name')[0];
console.log(element2);

const element3 = document.getElementsByTagName('p');
console.log(element3[3]); // 4e paragraphe

const element4 = document.getElementsByClassName('blue');
console.log(element4[1]); // 2e élément avec la classe "blue"

const element5 = document.querySelector('input[type=submit]');
console.log(element5);

// Sélection de tous les <h2> dans <article>
const elements = document.querySelectorAll('article h2');
for (const e of elements)
    console.log(e.textContent);

// Modification du contenu HTML
const element6 = document.getElementsByClassName('blue')[0];
element6.innerHTML = "<ul><li>ok</li></ul>"; // (corrigé : <ul> fermé correctement)

// Modification d'un attribut (ex : title)
element6.title = "Super chouette";

// Récupération d'un attribut
console.log(element6.getAttribute("title"));

// Ajout d'un attribut data-* (dataset)
element6.dataset.formation = "JS"; // Ajoute data-formation="JS"
console.log(element6.dataset.formation);

// Création d’un nouveau paragraphe
const someParagraph = document.createElement('p');
someParagraph.innerHTML = "Bonjour tout le monde !";
someParagraph.className = "red";

// Insertion du paragraphe en fin du body
document.body.append(someParagraph);

// Remplacement de #coucou par le nouveau paragraphe
const oldElement = document.getElementById("coucou");
oldElement.replaceWith(someParagraph);

// Insertion d’un texte avant #coucou (même s'il est déjà remplacé ici)
document.getElementById("coucou")?.insertAdjacentHTML("beforebegin", "Hello world");
