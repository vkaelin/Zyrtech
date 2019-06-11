import './bootstrap';

import Vue from 'vue';
import VModal from 'vue-js-modal'

Vue.use(VModal)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-chef-modal', require('./components/LoginChefModal.vue').default);
Vue.component('edit-set', require('./components/EditSet.vue').default);
Vue.component('nav-mobile', require('./components/NavMobile.vue').default);
Vue.component('side-nav', require('./components/SideNav.vue').default);
Vue.component('product-star', require('./components/ProductStar.vue').default);

new Vue({
    el: '#app',
});
