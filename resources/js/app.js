import './bootstrap';

import Vue from 'vue';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

new Vue({
    el: '#app',
});
