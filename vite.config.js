import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import laravelVuePagination from 'laravel-vue-pagination';

export default defineConfig({
    components: {
        'Pagination': laravelVuePagination
    },
    plugins: [
        vue(),
        laravel({
            input: [
             'resources/css/app.css',
             'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
