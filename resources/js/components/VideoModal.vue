<template>
    <modal name="youtube-modal" classes="-mt-24 rounded-lg shadow-lg" height="360" width="640">
        <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/g5TKSA-dlik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </modal>
</template>

<script>
export default {

    props:{
        link: String
    }
}
</script>
