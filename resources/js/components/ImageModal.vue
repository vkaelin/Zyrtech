<template>
    <modal name="image-modal" classes="-mt-24 rounded-lg bg-white shadow-lg" height="500" width="500" @before-open="beforeOpen">
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
            link: 'no-src'
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
    }
}
</script>
