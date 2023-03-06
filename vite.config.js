import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue({
            template: {
                compilerOptions: {
                    isCustomElement: (tag) => ['md-linedivider'].includes(tag),
                }
            }
        }),
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/app.scss',
                'resources/scss/certificate.scss',
                'resources/scss/blog.scss',
                'resources/scss/contact.scss',
                'resources/scss/training.scss',
                'resources/scss/home.scss'],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            'vue':'vue/dist/vue.esm-bundler.js'
        }
    }
});
