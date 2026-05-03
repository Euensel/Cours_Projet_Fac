# Réactivité et directives dans Vue.js

Vue.js permet de créer des interfaces **dynamiques et réactives**.  
Contrairement à une simple variable, une donnée réactive met automatiquement à jour l’affichage (DOM) lorsqu’elle change.

---

## 🔁 1. Données réactives avec `ref`

```vue
<script setup>
import { ref } from 'vue'

const count = ref(0)

function increment() {
  count.value++
}
</script>

<template>
  <button @click="increment">Compteur : {{ count }}</button>
</template>
Explication
ref(0) → rend la variable réactive
.value → obligatoire dans le script
Dans le template → pas besoin de .value
🎯 2. Gestion des événements (v-on ou @)
<button v-on:click="increment">Cliquer</button>
<button @click="increment">Cliquer</button>
v-on et @ font la même chose
@ est juste une version raccourcie
🧠 3. Manipulation des tableaux (push, filter, etc.)
<script setup>
import { ref } from 'vue'

const items = ref([])

function addItem() {
  items.value.push('Nouvel élément')
}

function removeItem() {
  items.value = items.value.filter(item => item !== 'test')
}
</script>
push() → ajouter
filter() → supprimer selon condition
sort() → trier
👁️ 4. Affichage conditionnel
v-if, v-else
<p v-if="isVisible">Visible</p>
<p v-else>Masqué</p>
Supprime/ajoute l’élément dans le DOM
v-show
<p v-show="isVisible">Visible</p>
Cache avec CSS (display: none)
Plus performant si affichage fréquent

⚠️ v-hide n’existe pas en Vue

🔗 5. Binding dynamique (v-bind ou :)
<img v-bind:src="imageUrl" />
<img :src="imageUrl" />
: est un raccourci de v-bind
Permet d’utiliser des variables dans les attributs HTML
🎨 6. Styles et classes dynamiques
:class
<p :class="{ active: isActive }">Texte</p>
:style
<p :style="{ color: textColor }">Texte</p>
🔒 7. Désactiver un élément
<button :disabled="isDisabled">Valider</button>
⚠️ c’est disabled, pas disable
🧾 8. Injection HTML (v-html)
<p v-html="htmlContent"></p>
Permet d’injecter du HTML
⚠️ Attention aux failles XSS (sécurité)
🔁 9. Boucles avec v-for
<li v-for="(item, index) in items" :key="index">
  {{ item }}
</li>
Parcourt une liste
:key est obligatoire pour optimiser le rendu
🔑 10. Importance de :key
Permet à Vue d’identifier chaque élément
Évite les bugs et améliore les performances
📝 11. Liaison bidirectionnelle (v-model)
<input v-model="name" />
<p>{{ name }}</p>
Synchronise input ↔ variable automatiquement
📩 12. Gestion des formulaires
<form @submit.prevent="submitForm">
  <input v-model="name" />
  <button type="submit">Envoyer</button>
</form>
@submit → écoute la soumission
.prevent → empêche le rechargement de la page
🧩 Exemple complet simple
<script setup>
import { ref } from 'vue'

const name = ref('')
const items = ref([])

function addItem() {
  if (name.value !== '') {
    items.value.push(name.value)
    name.value = ''
  }
}
</script>

<template>
  <input v-model="name" placeholder="Ajouter un élément" />
  <button @click="addItem">Ajouter</button>

  <ul>
    <li v-for="(item, index) in items" :key="index">
      {{ item }}
    </li>
  </ul>

  <p v-if="items.length === 0">Aucun élément</p>
</template>
⚡ Autres notions importantes
computed → valeurs calculées automatiquement
watch → surveiller les changements
props → communication parent → enfant
emit → communication enfant → parent
✅ Résumé rapide
ref() → rendre une variable réactive
@click → gérer les événements
v-if / v-show → conditions
v-bind / : → attributs dynamiques
v-for → boucles
v-model → formulaires
:key → optimisation
v-html → HTML dynamique
@submit.prevent → gestion des formulaires