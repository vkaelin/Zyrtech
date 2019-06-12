<template>
    <div class="inline">
        <form method="POST">
            <i class="fas fa-star cursor-pointer" 
                v-for="(index) in starsNum" 
                :key="index"
                :id="index"
                :class="[index <= form.star ? 'text-green-400' : 'text-gray-400' ]"
                @mouseover="starsHover"
                @mouseleave="hover = false"
                @click="sendStar"
                ></i>
        </form>
        <span class="text-xs italic text-green-500" v-if="hasVoted">Merci pour votre vote !</span>
    </div>
</template>

<script>
import ZyrtechForm from './ZyrtechForm';
export default {
    props:{
        product: Object,
        stars: Number,
        readonly: Boolean
    },
    data() {
        return {
            starsNum : 5,
            hover: false,
            hasVoted: false,
            form: new ZyrtechForm({
                star: this.stars
            })
        }
    },
    methods: {
        starsHover() {
            if(this.readonly || this.hasVoted){
                return
            }
            this.hover = true;
            console.log('hover over ' + event.target.id);
            this.form.star = event.target.id;
        },
        sendStar() {
            if(this.readonly || this.hasVoted){
                return
            }
            const productId = this.product.id;
            console.log(this.form);

            this.form.submit(`/products/${productId}/star`, 'post')
                .then(response => location = response.data.message)
                .catch(err => {})
        }
    },
    mounted(){

        if(this.product === undefined){
            return
        }

        const hasCookie = document.cookie.includes('voting_cookie_id' + this.product.id);

        if(hasCookie){
            this.hasVoted = true;
        }
    }
}
</script>