var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

        .styles([
            'libs/blog-post.css',
            'libs/bootstrap.css',
            'libs/font-awesome.css',
            'libs/metisMenu.css',
            'libs/sb-admin-2.css',
            'libs/toastr.min.css',
            'libs/styles.css'

        ], 'public/css/libs.css')

        .styles([
            'libs/frontend/bootstrap.min.css',
            'libs/frontend/font-awesome.min.css',
            'libs/frontend/style.css'
        ], 'public/css/front.css')

        .scripts([
            'libs/bootstrap.js',
            'libs/jquery.js',
            'libs/metisMenu.js',
            'libs/sb-admin-2.js',
            'libs/toastr.min.js',
            'libs/scripts.js'

        ], 'public/js/libs.js')

        .scripts([
            'libs/frontend/jquery.min.js',
            'libs/frontend/bootstrap.min.js',
            'libs/frontend/jquery.stellar.min.js',
            'libs/frontend/main.js'

        ], 'public/js/front.js')
});
