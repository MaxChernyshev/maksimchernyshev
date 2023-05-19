import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/front/css/app.css',
                'resources/front/scss/front.scss',
                // 'resources/front/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
