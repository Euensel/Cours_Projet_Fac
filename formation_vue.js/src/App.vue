<template>
    
    <form role="group" @submit.orevent="addMovie">
        <input type="text" v-model="movie">
        <button :disabled="movie.length === 0">Ajouter</button>
    </form>
    <ul>
        <li v-for="movie in movies" :key="movie">
            {{ movie }}
            <button class="secondary" @click="removeMovie(movie)">x</button>

        </li>
    </ul>
</template>

<script>
import { ref } from 'vue';
const showSpoiler = ref(false)
const movies = ref [
    "Les évadés",
    "Le parrain",
    "The Dark knight : le chevalier Noir",
    "Pulp Fiction",
    "Forrest Group",
    "Inception"
]
const movie = ref ('')

</script>