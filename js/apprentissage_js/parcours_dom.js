/*
====================================================================================
 📘 CHAPITRE : Le DOM (Document Object Model) en JavaScript

🎯 Objectifs :
- Comprendre les propriétés globales du `document`
- Naviguer dans la structure DOM avec les nœuds et les éléments
- Accéder à des éléments HTML comme : tableaux, formulaires, cookies, images, etc.
====================================================================================

🔸 DOCUMENT GÉNÉRAL
- document.documentElement  → <html>
- document.head             → <head>
- document.body             → <body>

🔹 NAVIGATION ENTRE NŒUDS (tous types : texte, commentaire, balise, etc.)
- childNodes                → liste des enfants (inclut les espaces et commentaires)
- firstChild / lastChild    → premier/dernier **nœud**
- parentNode                → remonte d’un niveau
- previousSibling / nextSibling → frère précédent/suivant

⚠️ Pour cibler uniquement les éléments HTML (et pas les espaces/retours ligne), on utilise :
- firstElementChild / lastElementChild / previousElementSibling / nextElementSibling

🔹 TABLEAUX HTML
- `<table id="stats">`
  - stats.rows     → toutes les lignes
  - stats.caption  → légende du tableau
  - stats.tHead    → entête
  - stats.tBodies  → corps (collection)

🔹 FORMULAIRES HTML
- document.forms                  → collection de tous les formulaires
- document.forms["informs"]      → accès par nom du formulaire
- form.elements["user_name"]     → champ avec `name="user_name"`
- form.elements["user_lang"]     → liste déroulante
- select.options                 → toutes les options
- option.selected = true        → sélectionne une option

🔹 DIVERS
- document.cookie   → accède aux cookies du document
- document.images   → liste des <img>
- document.links    → liste des <a> avec href
- document.scripts  → liste des <script>
====================================================================================
*/

// Affiche l'élément <html>
console.log(document.documentElement);

// Parcourt les nœuds enfants (peut inclure les espaces et les commentaires)
for (let node of document.body.childNodes) {
    console.log(node);
}

// Affiche le contenu textuel de l'élément ayant l'id "coucou"
console.log(coucou.textContent);

// Affiche les lignes du tableau avec l'id "stats"
console.log(stats.rows);

// Récupère le formulaire nommé "informs"
console.log(document.forms.informs);

// Stocke le formulaire dans une constante pour simplifier l'accès
const myForm = document.forms.informs;

// Affiche l’élément de nom "user_name" dans ce formulaire
console.log(myForm.elements.user_name);

// Affiche la valeur de la zone de commentaire
console.log(myForm.elements.user_comments.value);

// Sélectionne automatiquement la deuxième langue dans la liste déroulante (index 1)
myForm.elements.user_lang.options[1].selected = true;
