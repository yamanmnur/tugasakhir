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
    //$data['basoikan'] = 'dokumentasi';
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/profile', 'HomeController@index')->name('home');
// Route::get('/berita', 'HomeController@index')->name('home');
Route::get('/home',function(){
    return redirect('/');
})->name('home');
Route::get('/berita','BeritaController@index')->name('berita');
Route::get('/profile','HomeController@profile')->name('profile');
Route::post('/daftaranggota','EkskulController@daftaranggota')->name('daftaranggota');
Route::post('/users/logout','Auth\LoginController@userLogout')->name('logout');
Route::get('/kelolaekskul','HomeController@kelolaEkskul')->name('kelolaEkskul');
Route::get('/galeri','EkskulController@listEkskul')->name('galeriekskul');
Route::get('/galeri/{kode_ekskul}','EkskulController@detailGaleri')->name('detailgaleri');
Route::prefix('/listekskul')->group(function(){
    Route::get('/', 'EkskulController@index')->name('listekskul');
    Route::get('/{kode_ekskul}', 'EkskulController@detailEkskul')->name('detailekskul');
    Route::get('/galeri/{kode_ekskul}','EkskulController@detailGaleri')->name('detailgaleriekskul');
});

Route::prefix('/admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@adminLogout')->name('admin.logout');
});