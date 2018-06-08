<?php

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

Route::get('/', function () {
    return view('index');
});



// -------------------------------------------------------
	Route::get('home',function(){
		return view('index');
	});

	Route::get('home1',function(){
		return view('home1');
	});
	Route::get('home1s',function(){
		return view('home1s');
	});
	Route::get('home2',function(){
		return view('home2');
	});
	Route::get('home2s',function(){
		return view('index');
	});
	Route::get('home3',function(){
		return view('home3');
	});
// --------------------------------------------------------------




// --------------------------------------------------------------

	Route::get('blog1',function(){
		return view('blog-1');
	});
	Route::get('blog1s',function(){
		return view('blog-1s');
	});
	Route::get('blog2',function(){
		return view('blog-2');
	});
	Route::get('blog2s',function(){
		return view('blog-2s');
	});
	Route::get('blog3',function(){
		return view('blog-3');
	});
// --------------------------------------------------------------




// --------------------------------------------------------------
	Route::get('page',function(){
		return view('page');
	});
	Route::get('pagels',function(){
		return view('page-ls');
	});
	Route::get('pagers',function(){
		return view('page-rs');
	});
// --------------------------------------------------------------


// --------------------------------------------------------------
	Route::get('postfull',function(){
		return view('post-full');
	});
	Route::get('postl',function(){
		return view('post-l');
	});
	Route::get('post',function(){
		return view('post');
	});
// --------------------------------------------------------------




Route::get('noslide',function(){
	return view('no-slide');
});



Route::get('contact',function(){
	return view('contact');
});
Route::get('about',function(){
	return view('about');
});

