import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0', // Permite que outros containers acessem
        port: 5173, // Porta do Vite
        strictPort: true, // Garante que a porta não mude
        hmr: {
            host: 'localhost' // Isso pode precisar ser alterado para o nome do serviço no Docker
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/js/components/header/index.js',
                'resources/js/components/list-step/index.js',
                'resources/js/components/box/video.js',
                'resources/js/components/question-response.js',
                'resources/js/components/contact.js',
                'resources/js/components/popup-whatsapp.js',
                'resources/js/components/message-warning.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
