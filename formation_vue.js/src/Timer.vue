<template>
    <div ref = "div">
        temps: {{ time }}
        largeur : {{  size.width }}, hauteur: {{ size.height }}
    </div>
</template>
<script setup>
import {onMounted, onUnmounted, ref} from 'vue';

const div = ref(null)
const time = ref (0)
const size = ref({width: 0, height: 0})
let timer
onMounted(() => {
    const rect = div.value.getBoundingClientRect()
    size.value = {width: rect.width, height: rect.height}
    timer = setInterval(()=>{
        console.log('increment')
        time.value++
    }, 1000)
})

onUnmounted(() => {
    clearInterval(timer)
})
</script>