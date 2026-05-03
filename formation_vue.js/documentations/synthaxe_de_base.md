# Comprendre un composant Vue de base

Voici un exemple simple de composant Vue :

```vue
<template>
  <h1>Bonjour {{ firstname.toUpperCase() }}</h1>
  <p>Comment allez vous ?</p>
</template>

<script setup>
const firstname = "Jonh"
</script>

<style>
/* Ici vous pouvez ajouter vos styles CSS */
</style>
Explications du composant
1. Le bloc <template>
Contient le HTML du composant.

C’est ce qui sera affiché dans le navigateur.

On peut utiliser des interpolations avec {{ }} pour afficher des données JavaScript.

Exemple : {{ firstname }} affichera la valeur de la variable firstname.

Ici, on utilise {{ firstname.toUpperCase() }} pour afficher le prénom en majuscules grâce à la fonction JavaScript toUpperCase().

2. Le bloc <script setup>
Contient la logique JavaScript du composant.

Avec script setup, on peut déclarer des variables et fonctions qui seront directement accessibles dans le template.

Ici :

javascript
Copier le code
const firstname = "Jonh"
On déclare une constante firstname qui sera affichée dans le template.

⚠️ Pour l’instant, cette donnée n’est pas réactive : si on change la valeur de firstname, Vue ne mettra pas automatiquement à jour l’affichage.

Le prochain chapitre expliquera comment rendre les composants réactifs avec ref ou reactive.

3. Le bloc <style>
Contient les styles CSS du composant.

Les styles ici s’appliquent globalement par défaut.

On peut utiliser scoped pour limiter les styles à ce composant seulement :

vue
Copier le code
<style scoped>
h1 {
  color: #42b983;
}
</style>
Points importants
Un composant Vue est structuré en 3 parties principales : template, script, style.

L’interpolation {{ }} permet d’afficher des données ou d’appeler des fonctions JS simples.

Les fonctions comme toUpperCase() sont exécutées au moment du rendu du template.

Pour l’instant, les variables simples ne sont pas réactives : si on change leur valeur dans le script après le rendu, le DOM ne se mettra pas à jour automatiquement.

La réactivité sera expliquée dans le chapitre suivant avec ref, reactive et les composants dynamiques.

✅ Résumé rapide
<template> → HTML et affichage dynamique avec {{ }}

<script setup> → logique JS du composant

<style> → CSS pour styliser le composant

toUpperCase() → fonction JS utilisée dans le template

Les variables simples ne sont pas encore réactives