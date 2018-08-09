<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// $a=1;
// \App\Post::whereIn('id',function($query) use($a){

// });

Route::get('/', function () {
	// $tag=\App\Tag::find(1);
	// dd($tag->posts);
	App\User::withTrashed()->find(3)->restore();
	dd('ok');
	// $user=App\User::withTrashed()->find(4);
	// // Lấy bản ghi trong thùng rác / ->restore() khôi phục
	// $user=App\User::onlyTrashed()->find(4);
	// // Lấy bản ghi chỉ ở trong thùng rác
	// return view('welcome');

});


// Nhóm Route có cùng middleware
	// Route::middleware('checkage')->group(function(){
		// Route::prefix('admin')->group(function(){
			// Domain : admin/home
			// 	Route::get('/home', 'HomeController@index')->name('home');

		// })

	// }); 


	Route::post('upload',function(Request $request){
		foreach ($request->images as $key => $image) {
			echo $image->store('images');
		}
		// dd($path);
	});
	// Route::post('upload',function(Request $request){
	// 	Storage::delete('');
	// 	// dd($path);
	// });
// -------------------------------------------------------
		Route::get('/', 'HomeController@blog');

		Route::get('contact',function(){
			return view('blogs/contact');
		});
		Route::get('about',function(){
			return view('blogs/about');
		});
		Route::get('search', 'PostController@search')->name('post.search');
		Route::get('post/{slug}', 'PostController@showblog')->name('post.showblog');
		Route::get('category/{slug}', 'CategoryController@showblog')->name('category.showblog')->where('id','[0-9]+');
		Route::get('tag/{id}', 'TagController@showblog')->name('tag.showblog')->where('id','[0-9]+');
		Route::get('home/{id}', 'TagController@showblog')->name('tag.showblog')->where('id','[0-9]+');
// Auth::routes();

	Route::prefix('admin')->group(function(){
		Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
		Route::post('login', 'Auth\LoginController@login');
		Route::post('logout', 'Auth\LoginController@logout')->name('logout');

		// Registration Routes...
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('register', 'Auth\RegisterController@register');

		// Password Reset Routes...
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
		Route::middleware('auth')->group(function(){
			Route::post('password/reset', 'Auth\ResetPasswordController@reset');
			Route::get('/database', 'HomeController@index')->name('home');
			Route::get('/user', 'UserController@index')->name('user');
			Route::get('/post', 'PostController@index')->name('post');
			Route::get('/category/show/{id}', 'CategoryController@show')->name('show');
			Route::get('/user/show/{id}', 'UserController@show');
			Route::post('/category/update/{id}', 'CategoryController@update')->name('update');
			Route::post('/user/update/{id}', 'UserController@update');
			Route::get('/category', 'CategoryController@index')->name('category');
			Route::get('/categorylist', 'CategoryController@getList')->name('categorylist');
			Route::get('/userlist', 'UserController@getlist')->name('userlist');
			Route::get('/postlist', 'PostController@getlist')->name('postlist');
		 	Route::resource('user', 'UserController');
		 	Route::resource('post', 'PostController');
		 	Route::resource('category', 'CategoryController');

		});

	});

	



