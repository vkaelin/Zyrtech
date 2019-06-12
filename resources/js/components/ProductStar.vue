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
            form: new ZyrtechForm({
                star: this.stars
            })
        }
    },
    methods: {
        starsHover() {
            if(this.readonly){
                return
            }
            this.hover = true;
            console.log('hover over ' + event.target.id);
            this.form.star = event.target.id;
        },
        sendStar() {
            const productId = this.product.id;
            console.log(this.form);

            this.form.submit(`/products/${productId}/star`, 'post')
                .then(response => location = response.data.message)
                .catch(err => {})
        }
    },
}
</script>