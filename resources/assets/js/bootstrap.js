
window._ = require('lodash');

window.Timian = {
    token: document.head.querySelector('meta[name="csrf-token"]').content,
    url: document.head.querySelector('meta[name="url"]').content,
    user: JSON.parse(document.head.querySelector('meta[name="user"]').content),
    stripeKey: document.head.querySelector('meta[name="stripe-key"]').content
};

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap-sass');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

if (Timian.token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = Timian.token;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.Vue = require('vue');

window.events = new Vue();

window.flash = function(type, message) {
    window.events.$emit('flash', type, message);
}
