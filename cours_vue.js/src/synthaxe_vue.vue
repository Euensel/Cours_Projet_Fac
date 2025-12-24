<template>
    <p :style="{color:count>6 ? 'red' : 'green'}">Compteur: {{ count }}</p>
    <div v-show="count>=5">Bravo vous avez cliqué plus de 5 fois</div>
    <button v-on:click="increment">Incrémenter</button>
    <button v-on:click="decrement">Décrémenter</button>
    <hr>
    <button @click="sortMovies">Réorganiser</button>
    <form action="" @submit.prevent="addMovie">
        <input type="text" placeholder="Nouveau film" v-model="movieName">
        <button>Ajouter</button>
    </form>
    <ul>
        <li v-for="movie in movies"
        :key="movie">
            {{ movie }} <button @click="deleteMovie(movie)">Supprimer</button>
        </li>
    </ul>
    <ul>
        <li>{{ person.firstname }}</li>
        <li>{{ person.lastname }}</li>
        <li>{{ person.age }}</li>
    </ul>
    <button @click.prevent="randomaAge">Changer age</button>
</template>
<script setup>
import {ref} from 'vue'
const count = ref(0)
const increment=(event)=>{
    console.log(event)
    count.value++
}
const decrement=()=>{
    count.value--
}
const movies = ref ([
    "Matrix",
    "Titanic",
    "Time out"
])
const deleteMovie=(movie)=>{
    movies.value=movies.value.filter(m=>m!=movie)
}
const sortMovies=()=>{
    movies.value.sort((a,b) => a > b ? 1 : -1)
}
const movieName=ref('')
const addMovie=()=>{
    movies.value.push(movieName.value)
    movieName.value = ''
}
const person=ref({
    firstname:'John',
    lastname:'Doe',
    age:20
})
const randomaAge=()=>{
    person.value.age=Math.round(Math.random() * 100)

}
</script>

/*
les attributs
    v-on ou @
    ref 
    push sort value filter
    v-show
    conditions(v-if v-else)
    v-hide
    v-bind
    les : devant un attribut
    :style
    :class
    :disable
    v-html
    boucles (v-for)
    :key
    v-model
    @submit @subtmit.prevent

*/