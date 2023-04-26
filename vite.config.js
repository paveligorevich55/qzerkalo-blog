import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/project.scss',
                'resources/js/app.js',
                'resources/js/project.js',
            ],
            output: [
                'public/assets/admin/css',
                'public/assets/project/css',
                'public/assets/admin/js',
                'public/assets/project/js',
            ],
            refresh: true,
        }),
    ],
});
