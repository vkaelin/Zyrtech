<template>
    <div>
        <span class="inline-block text-xs italic text-green-500 mb-2" v-if="hasVoted">Merci pour votre note !</span>
        <span class="inline-block text-xs italic text-green-500 mb-2" v-if="!hasVoted && !readonly">Evaluez ce produit !</span>

        <form method="POST">
            <i class="fas fa-star" 
                v-for="(index) in starsNum" 
                :key="index"
                :id="index"
                :class="[index <= form.star ? 'text-green-400' : 'text-gray-400', size, readonly === false && hasVoted === false ? 'cursor-pointer' : '']"
                @mouseover="starsHover"
                @mouseleave="hover = false"
                @click="sendStar"
                ></i>
        </form>
    </div>
</template>

<script>
import ZyrtechForm from './ZyrtechForm';
export default {
    props:{
        product: Object,
        stars: Number,
        readonly: Boolean,
        size: {
            default: '',
            type: String
        }
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