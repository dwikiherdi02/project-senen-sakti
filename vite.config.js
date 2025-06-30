import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            // '~@popperjs': path.resolve(__dirname, 'node_modules/@popperjs/core'),
        }
    },
    css: {
        preprocessorOptions: {
            scss: {
                quietDeps: true, // Suppress deprecation warnings from dependencies
                charset: false,
                silenceDeprecations: ['import'], // Menambahkan ini
                api: 'modern-compiler' // Gunakan compiler modern
            }
        }
    }
});
