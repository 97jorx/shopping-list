import './bootstrap';


import { createApp } from "vue/dist/vue.esm-bundler";
import Content from './components/content.vue'

const content = createApp({})

content.component('content', Content)
content.mount('#content-products')