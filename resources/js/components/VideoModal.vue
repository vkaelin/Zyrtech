<template>
    <modal v-if="link !== null && link !== 'empty'" name="youtube-modal" classes="-mt-24 rounded-lg shadow-lg" height="360" width="640" @before-open="beforeOpen">
        <iframe width="640" height="360" 
            :src="`https://www.youtube-nocookie.com/embed/${link}`" 
            frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </modal>
    <modal v-else name="youtube-modal" classes="-mt-24 bg-white rounded-lg shadow-lg text-base italic" height="100" width="340" @before-open="beforeOpen">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <i class="text-green-500 fa-2x inline-text fas fa-exclamation-circle"></i>
            <p class="text-gray-800 mt-2 text-center">Il n'y a pas de vidéo pour ce produit.</p>
        </div>
    </modal>
</template>

<script>
export default {

    props:{
        link: String,
        id: Number
    },
    methods:{
        beforeOpen (event) {
            if(this.id !== event.params.videoId){
                event.stop();
            }
            //console.log(event.params.videoId)
            
        }
    }
}
</script>
