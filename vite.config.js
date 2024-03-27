import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import {fileURLToPath, URL} from 'url';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/style.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': fileURLToPath(new URL('./resources', import.meta.url)),
            '@js': fileURLToPath(new URL('./resources/js', import.meta.url))
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
