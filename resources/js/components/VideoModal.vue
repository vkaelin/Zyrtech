<template>
    <modal v-if="link !== null && link !== 'empty'" name="youtube-modal" classes="rounded-lg shadow-lg" :reset="reset" :height="height" :width="width" @before-open="beforeOpen">
        <iframe :width="width" :height="height" 
            :src="`https://www.youtube-nocookie.com/embed/${link}`" 
            frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </modal>
    <modal v-else name="youtube-modal" classes="md:-mt-24 bg-white rounded-lg shadow-lg text-base italic" height="100" width="340" @before-open="beforeOpen">
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
    data() {
        return {
            height: 360,
            width: 640,
            reset: false
        }
    },
    methods:{
        beforeOpen (event) {

            const body = document.getElementsByTagName("body")[0];
            console.log(body.clientHeight);
            console.log(body.clientWidth);

            if(this.id !== event.params.videoId){
                event.stop();
            }

            // if(body.clientWidth < this.width){
            //     this.width = 320
            //     this.height = 180
            //     this.reset = true;
            // };
            //console.log(event.params.videoId)
            
        }
    },
    mounted() {
        const body = document.getElementsByTagName("body")[0];
        if(body.clientWidth < this.width){
                this.width = 320
                this.height = 180
                this.reset = true;
            };
    },
}
</script>
