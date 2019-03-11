<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('home', 'HomeController@index');
    Route::get('konfirmasi', 'Konfirmasi@index');
    Route::get('confirm/{id}','Konfirmasi@confirm');
    Route::get('templatecover','TemplateController@upcover');
    Route::get('templateepub','TemplateController@upepub');
    Route::post('postTemplateCover', 'TemplateController@upTempCover');
    Route::post('postTemplateEpub', 'TemplateController@upTempEpub');
    Route::get('confirmpembayaran/{id}','Konfirmasi@confirmpembayaran');
    Route::get('konfirmasipublish', 'Konfirmasi@index_confirm_pubish');
    Route::get('confirm_publish/{id}','Konfirmasi@confirm_publish');
    Route::get('forum/{id}','ListBukuController@forum');
    Route::post('postReply', 'ListBukuController@postReply');
    Route::get('listdocs','ListDocsController@list');
    Route::get('statusnaskah/{id}','ListDocsController@statusnaskah');
    Route::post('reply_stat/{id}/{id_author}', 'HomeController@poststatDoc');
});


Route::group(['namespace' => 'Author', 'prefix' => 'author'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
    Route::post('home/postBook', 'UploadBook@postBook');
    Route::get('downtemplatecover','TemplateController@downcover');
    Route::get('downtemplateepub','TemplateController@downepub');
    Route::get('listbuku','ListBukuController@list');
    Route::get('listdocs','ListDocsController@list');
    Route::get('forum/{id}','ListBukuController@forum');
    Route::post('postReply', 'ListBukuController@postReply');
    Route::get('listbuku/edit/{id}','ListBukuController@formedit');
    Route::post('listbuku/edit/{id}','UploadBook@postedit');
    Route::get('upload', 'UploadBook@index');
    Route::get('hapusbuku/{id}', 'ListBukuController@deleteBook');
    Route::post('home/postDoc', 'UploadBook@postDoc');
    Route::get('statusnaskah/{id}','ListDocsController@statusnaskah');
    Route::post('reply_stat/{id}', 'UploadBook@poststatDoc');
});

Route::get('/belibuku/{idbuku}','Beli@index')->middleware('auth');
Route::get('/mylibrary','HomeController@mylibrary')->middleware('auth');
Route::get('/book_view',function () {return view('bib-epup-viewer');})->middleware('auth');
Route::post('/cek_book', 'ViewBookController@show');

Route::get('book/{id}', 'HomeController@show');
Route::get('/newrelease','HomeController@newreleaseall');
Route::get('/profil/{id}', 'UsersProfil@show');
Route::get('kategori/{kategori}', 'HomeController@kategorishow');


Route::post('/js/{id}',function () {
    return view('welcome');
});
