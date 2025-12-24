
<template>
    <ul>
        <li>{{ taches.title}}</li>
        <li>{{ taches.completed }}</li>
        <li>{{ taches.date }}</li>
    </ul>
    <form action="" @submit.prevent="addTache">
        <input type="text" placeholder="Ajouter une tache" v-model="tacheName">
        <button>Ajouter</button>
    </form>
</template>

<script>
    import {ref} from 'vue'
    const taches =ref({
        title:'tache à faire',
        completed:'manger',
        date: 1
    })
    const tacheName =ref('')
    const addTache=()=>{

    }
    
</script>

<style>

</style>