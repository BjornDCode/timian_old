require('./bootstrap');

Vue.component('Flash', require('./components/common/Flash.vue'));
Vue.component('Loader', require('./components/common/Loader.vue'));

Vue.component('Plans', require('./components/plans/Plans.vue'));
Vue.component('Plan', require('./components/plans/Plan.vue'));
Vue.component('CheckoutForm', require('./components/plans/CheckoutForm.vue'));

const app = new Vue({
    el: '#app'
});
