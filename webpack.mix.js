let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css')
//    .sass('resources/assets/sass/main.scss', 'public/css');
// mix.styles([
// 	'resources/assets/css/app.css',
// 	'resources/assets/css/main.css',
// 	],'public/css/all.css');
mix.babel('resources/assets/css/admin/adminlte.css','public/css/admin/adminlte.css');
mix.babel('resources/assets/css/admin/bootstrap.css','public/css/admin/bootstrap.css');
mix.babel('resources/assets/css/admin/dataTables.bootstrap4.css','public/css/admin/dataTables.bootstrap4.css');
mix.babel('resources/assets/js/admin/fastclick.js','public/js/admin/fastclick.js');
mix.babel('resources/assets/js/admin/jquery.slimscroll.js','public/js/admin/jquery.slimscroll.js');
mix.babel('resources/assets/js/admin/bootstrap.js','public/js/admin/dataTables.bootstrap4.js');
mix.babel('resources/assets/js/admin/bootstrap.bundle.js','public/js/admin/bootstrap.bundle.js');
mix.babel('resources/assets/js/admin/demo.js','public/js/admin/demo.js');
mix.babel('resources/assets/js/admin/jquery.js','public/js/admin/jquery.js');
mix.babel('resources/assets/js/admin/adminlte.js','public/js/admin/adminlte.js');
mix.copy('resources/assets/img/','public/images/',false);
if (mix.inProduction()) {
	mix.version();
}
