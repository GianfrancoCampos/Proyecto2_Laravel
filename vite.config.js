import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,           
=======
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
>>>>>>> 6c75c9eba8d0b5fcd8b0bc115e7a63cc0f903f67
        }),
    ],
});