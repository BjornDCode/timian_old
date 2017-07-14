require('./bootstrap');

Vue.component('CheckoutForm', require('./components/CheckoutForm.vue'));

const app = new Vue({
    el: '#app'
});
