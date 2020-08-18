require('./bootstrap');
window.Vue = require('vue');

import VueCountdown from '@chenfengyuan/vue-countdown';
import comment from './components/CommentMusicComponent';
import search from './components/SearchComponent';
import event from './components/EventComponent';



Vue.component(VueCountdown.name,VueCountdown);
Vue.component('comment-music',comment);
Vue.component('search-web',search);
Vue.component('event-music',event);



const app = new Vue({
    el: '#app',
});


