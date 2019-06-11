<template>
    <div class="inline">
        
        <i class="fas fa-star" 
            v-for="(index) in starsNum" 
            :key="index"
            :class="[index <= stars ? 'text-green-400' : 'text-gray-400' ]"></i>    
    </div>
</template>

<script>
export default {
    props:{
        stars: Number,
        readonly: Boolean
    },
    data() {
        return {
            starsNum : 5
        }
    },
}
</script>