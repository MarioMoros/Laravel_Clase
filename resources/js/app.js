// import './bootstrap';
//
// import Alpine from 'alpinejs';
//
// window.Alpine = Alpine;
//
// Alpine.start();

import {createApp} from "vue/dist/vue.esm-bundler";
import cronometro from "./componentes/cronometro.vue";

createApp({
    components:{
        cronometro,
    }
}).mount('#app');
