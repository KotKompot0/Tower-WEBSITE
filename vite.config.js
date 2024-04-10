import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import {fileURLToPath, URL} from 'url';
import vitePluginRequire from "vite-plugin-require";

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vitePluginRequire.default(),
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
