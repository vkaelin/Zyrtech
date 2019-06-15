import './bootstrap';

import Vue from 'vue';
import VModal from 'vue-js-modal'

Vue.use(VModal)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('login-chef-modal', require('./components/LoginChefModal.vue').default);
Vue.component('edit-set', require('./components/EditSet.vue').default);
Vue.component('nav-mobile', require('./components/NavMobile.vue').default);
Vue.component('product-star', require('./components/ProductStar.vue').default);
Vue.component('dropdown', require('./components/DropDown.vue').default);
Vue.component('search-dashboard', require('./components/SearchDashboard.vue').default);
Vue.component('chefs-table', require('./components/ChefsTable.vue').default);
Vue.component('pagination', require('./components/Pagination.vue').default);

new Vue({
    el: '#app',
});
