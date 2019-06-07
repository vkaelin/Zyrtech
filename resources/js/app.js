import './bootstrap';

import Vue from 'vue';
import VModal from 'vue-js-modal'

Vue.use(VModal)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-chef-modal', require('./components/LoginChefModal.vue').default);
Vue.component('edit-set', require('./components/EditSet.vue').default);

new Vue({
    el: '#app',
});
