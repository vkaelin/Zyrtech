import './bootstrap';

import Vue from 'vue';
import VModal from 'vue-js-modal'

Vue.use(VModal)

Vue.component('dropdown', () => import(/* webpackChunkName: "js/global" */ './components/shared/DropDown.vue'));
Vue.component('flash-message', () => import(/* webpackChunkName: "js/global" */ './components/shared/FlashMessage.vue'));
Vue.component('pagination', () => import(/* webpackChunkName: "js/global" */ './components/shared/Pagination.vue'));

Vue.component('product-star', () => import(/* webpackChunkName: "js/public" */ './components/shared/ProductStar.vue'));
Vue.component('public-nav-mobile', () => import(/* webpackChunkName: "js/public" */ './components/shared/PublicNavMobile.vue'));

Vue.component('nav-mobile', () => import(/* webpackChunkName: "js/dashboard" */ './components/shared/NavMobile.vue'));
Vue.component('multiselect', () => import(/* webpackChunkName: "js/dashboard" */ './components/shared/MultiSelect.vue'));
Vue.component('search-dashboard', () => import(/* webpackChunkName: "js/dashboard" */ './components/shared/SearchDashboard.vue'));
Vue.component('tab', () => import(/* webpackChunkName: "js/dashboard" */ './components/shared/Tab.vue'));
Vue.component('tabs', () => import(/* webpackChunkName: "js/dashboard" */ './components/shared/Tabs.vue'));

Vue.component('chefs-table', () => import(/* webpackChunkName: "js/ChefsTable" */ './components/ChefsTable.vue'));
Vue.component('edit-set', () => import(/* webpackChunkName: "js/EditSet" */ './components/EditSet.vue'));
Vue.component('login-chef-modal', () => import(/* webpackChunkName: "js/LoginChefModal" */ './components/LoginChefModal.vue'));
Vue.component('youtube-modal', () => import(/* webpackChunkName: "js/VideoModal" */ './components/VideoModal.vue'));
Vue.component('image-modal', () => import(/* webpackChunkName: "js/ImageModal" */ './components/ImageModal.vue'));
Vue.component('products-table', () => import(/* webpackChunkName: "js/ProductsTable" */ './components/ProductsTable.vue'));
Vue.component('users-table', () => import(/* webpackChunkName: "js/UsersTable" */ './components/UsersTable.vue'));

window.Bus = new Vue();

new Vue({
    el: '#app',
});
