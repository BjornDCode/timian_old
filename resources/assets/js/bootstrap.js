
window._ = require('lodash');


try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.stripeKey = document.head.querySelector('meta[name="stripe-key"]').content;
window.url =  document.head.querySelector('meta[name="url"]').content;

window.Vue = require('vue');

window.events = new Vue();

window.flash = function(type, message) {
    window.events.$emit('flash', type, message);
}
