const mix = require('laravel-mix');

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

 mix.styles([
	'resources/assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css',
	'resources/assets/admin/bower_components/font-awesome/css/font-awesome.min.css',
	'resources/assets/admin/bower_components/Ionicons/css/ionicons.min.css',
	'resources/assets/admin/dist/css/AdminLTE.min.css',
	'resources/assets/admin/dist/css/skins/_all-skins.min.css',
	'resources/assets/admin/bower_components/morris.js/morris.css',
	'resources/assets/admin/bower_components/jvectormap/jquery-jvectormap.css',
	'resources/assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
	'resources/assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css',
	'resources/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'
], 'public/css/admin.css');

mix.scripts([
	'resources/assets/admin/js/jquery.min.js',
	'resources/assets/admin/js/bootstrap.min.js',
	'resources/assets/admin/js/fastclick.js',
	'resources/assets/admin/js/adminlte.min.js',
	'resources/assets/admin/js/demo.js',
	'resources/assets/admin/js/ckeditor.js',
	'resources/assets/admin/js/bootstrap3-wysihtml5.all.min.js'
], 'public/js/admin.js');

mix.copy('resources/assets/admin/bower_components/font-awesome/fonts','public/fonts');
mix.copy('resources/assets/admin/bower_components/bootstrap/fonts','public/fonts');
