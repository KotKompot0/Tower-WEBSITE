import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import * as path from "path";

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '@': '/resources',
            '@js': '/resources/js',
            '@sass': '/resources/sass',
        }
    },
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                @import "./resources/sass/_nullstyle.scss";
                @import "./resources/sass/_variables.scss";
                @import "./resources/sass/_fonts.scss";
                @import "./resources/sass/_main.scss";
            `
            }
        }
    }
});
