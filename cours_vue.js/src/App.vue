
<template>
    <form action="" @submit.prevent="addTodo">
        <fieldset role="group">
            <input v-model="newTodo" type="text" placeholder="Tache à effectuer">
            <button :disabled="newTodo.length==0">Ajouter</button>
        </fieldset>
    </form>

    <div v-if="todos.length==0">Vous n'avez pas de taches à faire</div>

    <div v-else>
        <ul>
            <li v-for="todo in todos"
             :key="todo.date">
                <label>
                    <input type="checkbox" v-model="todo.completed">
                    {{ todo.title }}
                </label>
            </li>
          
        </ul>
    </div>
</template>

<script setup>
    import {ref} from 'vue'
    const newTodo=ref('')
    const todos = ref(
    [
        {
            title:"Tache de test",
            completed:true,
            date:1
        },
        {
            title:"Tache à faire",
            completed:false,
            date:2
        }
    ])
    const addTodo=()=>{
        todos.value.push({
            title:newTodo.value,
            completed:false,
            date:Date.now()
        })
    }

    
</script>

<style>

</style>