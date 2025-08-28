/*
====================================================================================
📘 CHAPITRE : Manipulation des styles CSS et des classes d’un élément DOM

🎯 Objectifs :
- Modifier les styles CSS en ligne via JS
- Gérer les classes CSS avec classList (ajouter, supprimer, vérifier, basculer)
- Utiliser getComputedStyle pour lire les styles calculés

====================================================================================

🔹 Modifier le style CSS directement via .style

    element.style.propriétéCSS = "valeur";

🔹 Travailler avec les classes CSS via element.classList

- add(classe1, classe2, ...)       → ajouter une ou plusieurs classes
- remove(classe1, classe2, ...)    → supprimer une ou plusieurs classes
- contains(classe)                 → vérifie si l’élément a cette classe (retourne true/false)
- toggle(classe)                  → ajoute la classe si absente, sinon la supprime
- replace(classe1, classe2)       → remplace classe1 par classe2

🔹 Obtenir les styles calculés d’un élément

- window.getComputedStyle(element) → renvoie un objet contenant toutes les propriétés CSS calculées (même celles en stylesheet externes)

====================================================================================
*/

// Sélection de l’élément avec l’id "coucou"
const element = document.getElementById("coucou");

// Modifier le style CSS en ligne : changer la couleur de fond (background-color)
element.style.backgroundColor = "#000"; // noir

// Remplacer complètement les classes existantes par "blue" et "underline"
element.className = "blue underline";

// Ajouter plusieurs classes (sans écraser les classes précédentes)
element.classList.add("underline", "italic");

// Remplacer la classe "green" par "red" si "green" existe
element.classList.replace("green", "red");

// Basculer la classe "blue" : 
// - si "blue" est présente, elle sera supprimée
// - si elle est absente, elle sera ajoutée
element.classList.toggle("blue");

// Exemple d’utilisation possible de getComputedStyle
const styles = window.getComputedStyle(element);
console.log("Couleur de fond calculée:", styles.backgroundColor);
