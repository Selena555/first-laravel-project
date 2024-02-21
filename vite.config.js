import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/magnific-popup.css' ,
                'resources/js/app.js' ,
                'resources/js/bootstrap.js' ,
                'resources/js/custom.js' ,
                'resources/js/smoothscroll.js',
                'resources/js/jquery.js' ,
                // 'resources/js/jquery.magnific-popup.min.js' ,
                'resources/js/jquery.parallax.js' ,
                // 'resources/js/jquery.magnific-popup-options.js' ,
                'resources/js/particles.min.js' ,

            ],
            refresh: true,
        }),
    ],
});

