import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import {createApp} from 'vue'

const app = createApp({

})

import Home from '@/components/front/Home.vue'

app.component('Home', Home)

app.mount("#app")


window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
