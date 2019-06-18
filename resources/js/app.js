import './bootstrap';

import Vue from 'vue';
import VModal from 'vue-js-modal'

Vue.use(VModal)

Vue.component('dropdown', require('./components/shared/DropDown.vue').default);
Vue.component('multiselect', require('./components/shared/MultiSelect.vue').default);
Vue.component('nav-mobile', require('./components/shared/NavMobile.vue').default);
Vue.component('public-nav-mobile', require('./components/shared/PublicNavMobile.vue').default);
Vue.component('pagination', require('./components/shared/Pagination.vue').default);
Vue.component('product-star', require('./components/shared/ProductStar.vue').default);
Vue.component('search-dashboard', require('./components/shared/SearchDashboard.vue').default);
Vue.component('tab', require('./components/shared/Tab.vue').default);
Vue.component('tabs', require('./components/shared/Tabs.vue').default);

Vue.component('chefs-table', require('./components/ChefsTable.vue').default);
Vue.component('edit-set', require('./components/EditSet.vue').default);
Vue.component('login-chef-modal', require('./components/LoginChefModal.vue').default);
Vue.component('products-table', require('./components/ProductsTable.vue').default);
Vue.component('users-table', require('./components/UsersTable.vue').default);

new Vue({
    el: '#app',
});
