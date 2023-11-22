import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/common.css',
                'resources/css/custom-tailwind.css',
                'resources/scss/common.scss'
            ],
            refresh: true,
        }),
    ],
});
