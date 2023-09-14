import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import {createApp} from 'vue'

const app = createApp({

})

import Home from '@/components/front/Home.vue'
import Dashboard from '@/components/back/Dashboard.vue'

app.component('Home', Home)
app.component('Dashboard', Dashboard)

app.mount("#app")


window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
