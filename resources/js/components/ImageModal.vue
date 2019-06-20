<template>
    <modal name="image-modal" classes="-mt-24 rounded-lg bg-white shadow-lg" :height="height" :reset="reset" :width="width" @before-open="beforeOpen">
        <div class="w-full h-full flex flex-col items-center justify-center">
            <img class="h-full w-auto" :class="[link === '/storage/placeholder.jpg' ? 'object-cover' : 'object-contain']" :src="link" alt="Image du produit">
        </div>
    </modal>
</template>

<script>
export default {

    props:{
        id: Number
    },
    data() {
        return {
            link: 'no-src',
            width: 500,
            height: 500,
            reset: false
        }
    },
    methods:{
        beforeOpen (event) {
            
            if(event.params.imageUrl === '/storage/no-src'){
                this.link = '/storage/placeholder.jpg'
            }else{
                this.link = event.params.imageUrl;
            }
            

            console.log(event.params.imageUrl)
            
        }
    },
    mounted() {
        const body = document.getElementsByTagName("body")[0];
        if(body.clientWidth < this.width){
                this.width = 250
                this.height = 250
                this.reset = true;
            };
    },
}
</script>
