/*
====================================================================================
📘 CHAPITRE : Gestion des événements DOM avec JavaScript

🎯 Objectifs :
- Attacher des gestionnaires d'événements via `onclick` et `addEventListener`
- Utiliser l'objet événement `event`
- Arrêter la propagation d'un événement avec `event.stopPropagation()`
- Prévenir le comportement par défaut d’un événement avec `event.preventDefault()`
- Écouter différents types d’événements (click, mouseover, mouseleave, keydown)

====================================================================================
*/

// Sélectionne le premier bouton trouvé dans la page
let someButton = document.querySelector('button');

// Méthode 1 : Attacher un événement click via la propriété onclick
someButton.onclick = () => {
    alert("Tu as cliqué");
};

// Méthode 2 : Remplacer le gestionnaire onclick avec une fonction qui utilise l'objet event
someButton.onclick = (event) => {
    console.log(event); // Affiche l'objet événement dans la console
    document.body.style.backgroundColor = "#ABC"; // Change la couleur de fond du body
};

// Méthode 3 : Ajouter un gestionnaire d'événement click avec addEventListener
// Avantage : on peut ajouter plusieurs gestionnaires sans écraser les précédents
someButton.addEventListener('click', (event) => {
    event.stopPropagation(); // Empêche la propagation de l'événement aux éléments parents
    console.log("Click intercepté, propagation stoppée :", event);
});

// Sélectionne le premier formulaire dans la page
let someForm = document.querySelector('form');

// Écouteur pour l'événement 'mouseover' (quand la souris entre dans le formulaire)
someForm.addEventListener('mouseover', (event) => {
    console.log("Souris entrée sur le formulaire :", event);
});

// Correction de la faute dans l'événement 'mouseleave' (au lieu de 'mousleave')
someForm.addEventListener('mouseleave', (event) => {
    console.log("Souris sortie du formulaire :", event);
});

// Écouteur sur la fenêtre pour détecter les touches pressées (keydown)
window.addEventListener('keydown', (event) => {
    event.preventDefault(); // Empêche l'action par défaut liée à la touche pressée (ex: scroll)

    // Attention : pour comparer une valeur on utilise '==' ou '===' (et pas '=')
    if(event.key === 'b') {
        alert("C'est gagné");
    }
});
