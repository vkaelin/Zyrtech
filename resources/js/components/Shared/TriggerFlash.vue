<template>
    
</template>

<script>
export default {
    props: {
        message: Object
    },
    
    created() {
        Bus.$emit('flash-message', this.message);
    }
}
</script>
