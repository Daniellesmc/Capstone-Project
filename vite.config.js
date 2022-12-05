import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/css/app.css"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetsUrls: {
                    base: null,
                    includeAbsolute: false,
                }
            }
        })
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "resources/css/app.css";',
            },
        },
    },
});
