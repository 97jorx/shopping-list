import './bootstrap';


import { createApp } from "vue/dist/vue.esm-bundler";
import Pagination from './components/pagination.vue'

const app = createApp({})
app.component('pagination', Pagination)

app.mount('#app')