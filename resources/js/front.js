window.Vue = require('vue');

import App from './App.vue';

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = new Vue(
    {
        el:'#root',
        render: h=>h(App)
    }

);