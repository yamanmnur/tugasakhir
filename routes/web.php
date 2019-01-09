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
Route::prefix('/kelolaekskul')->group(function(){

    //-------------- KELOLA ANGGOTA EKSKUL ------------------------//

    Route::get('/','HomeController@kelolaEkskul')->name('kelolaEkskul');
    
    Route::get('/kelolaanggotaekskul','HomeController@kelolaAnggotaEkskul')->name('kelola.anggota.ekskul');

    Route::get('/kelolaanggotaekskul/tambahnilaianggota/{nis}','HomeController@shoFormKelolaAnggotaEkskul')->name('form.tambah.nilai');
    Route::post('/kelolaanggotaekskull','HomeController@tambahNilaiAnggota')->name('tambah.nilai.anggota');
    
    Route::post('/kelolaanggotaekskul','HomeController@hapusAnggotaEkskul')->name('hapus.anggota.ekskul');

    //-------------- KELOLA PESAN  ------------------------//

    Route::get('/pesan','HomeController@KelolaEkskulPesan')->name('kelola.pesan');
    Route::post('/tambahpesan','HomeController@tambahPesan')->name('tambah.pesan');
    Route::post('/pesan','HomeController@editPesan')->name('edit.pesan');
    Route::post('/pesan','HomeController@hapusPesan')->name('hapus.pesan');
    
    //-------------- KELOLA PRESTASI ------------------------//

    Route::get('/prestasi','HomeController@prestasi')->name('kelola.prestasi');
    Route::post('/tambahprestasi','HomeController@addPrestasi')->name('tambah.prestasi');
    Route::post('/prestasi','HomeController@editPrestasi')->name('edit.prestasi');
    Route::post('/prestasi','HomeController@hapusPrestasi')->name('hapus.prestasi');
    
    //-------------- KELOLA GALERI ------------------------//

    Route::get('/galeri','HomeController@galeriEkskul');
    Route::post('/galeri','HomeController@tambahGaleri')->name('tambah.galeri');
    Route::post('/galeri','HomeController@editGaleri')->name('edit.galeri');
    Route::post('/galeri','HomeController@hapusGaleri')->name('hapus.galeri');

    //-------------- KELOLA INFORMASI EKSKUL ------------------------//

    Route::get('/informasiekskul','HomeController@informasiEkskul')->name('informasi.ekskul');
    Route::post('/informasiekskull','HomeController@editDeskripsi')->name('edit.deskripsi');
    Route::post('/informasiekskul','HomeController@ajukanPelatihBaru')->name('ajukan.pelatih');
    Route::post('/informasiekskul','HomeController@ajukanPembimbingBaru')->name('ajukan.pembimbing');

});

Route::get('/galeri','EkskulController@listEkskul')->name('galeriekskul');
Route::get('/galeri/{kode_ekskul}','EkskulController@detailGaleri')->name('detailgaleri');



Route::prefix('/listekskul')->group(function(){
    Route::get('/', 'EkskulController@index')->name('listekskul');
    Route::get('/{kode_ekskul}', 'EkskulController@detailEkskul')->name('detailekskul');
    Route::get('/galeri/{kode_ekskul}','EkskulController@detailGaleri')->name('detailgaleriekskul');
    Route::get('/detailEkskul/prestasi/{kode_ekskul}','EkskulController@prestasiEkskul')->name('prestasi.ekskul');
});

Route::prefix('/admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/logout','Auth\AdminLoginController@adminLogout')->name('admin.logout');

    //-------------- KUMPULAN DATA EKSKUL ------------------------//

    Route::get('/detailekskul','AdminController@detailEkskul')->name('detail.ekskul');
    Route::get('/listEkskul','AdminController@listEkskul')->name('list.ekskul');
    
    Route::get('/tambahEkskul','AdminController@showTambahEkskul')->name('tambah.ekskul');
    Route::post('/tambahEkskul','AdminController@tambahEkskul')->name('tambah.ekskul.submit');
    Route::post('/hapusEkskul','AdminController@hapusEkskul')->name('hapus.ekskul');
    
    //-------------- KUMPULAN DATA PELATIH ------------------------//

    Route::get('/listpelatih','AdminController@showListPelatih')->name('list.pelatih');
    Route::post('/listPelatih','AdminController@tambahPelatih')->name('tambah.pelatih');

    //-------------- KUMPULAN DATA PEMBIMBING ------------------------//

    Route::get('/listpembimbing','AdminController@showListPembimbing')->name('list.pelatih');
    Route::post('/listpembimbing','AdminControllr@tambahPembimbing')->name('tambah.pembimbing');


    //-------------- KUMPULAN DATA KETUA EKSKUL ------------------------//

    Route::get('/listketua','AdminController@daftarListKetua')->name('list.ketua');
    Route::get('/ekskul','AdminController@showHalaman')->name('show.halaman');

    //-------------- PENGAJUAN EKSKUL ------------------------//
    
    Route::get('/pengajuanekskul','AdminController@pengajuanekskul')->name('show.pengajuan.ekskul');
    Route::post('/pengajuanekskul','AdminController@hapusPengajuan')->name('hapus.pengajuan');
    Route::post('/pengajuanekskul','AdminController@terimaPengajuan')->name('terima.pengajuan');
    
    //-------------- USER / SISWA ------------------------//

    Route::get('/listuser','AdminController@showUser')->name('show.user');
    Route::post('/tambahuser','AdminController@tambahUser')->name('tambah.user');
    Route::get('/edituser','AdminController@showEditUser')->name('show.edit.user');
    Route::post('/edituser','AdminController@editUser')->name('edit.user.submit');

    //-------------- PESAN ------------------------//

    Route::get('/listpesan','AdminController@dataPesan')->name('data.pesan.admin');
    Route::post('/hapuspesan','AdminController@hapusPesan')->name('hapus.pesan.admin');
    Route::get('/editpesan','AdminController@showEditPesan')->name('edit.pesan.admin');
    Route::post('/editpesan','AdminController@editPesan')->name('edit.pesan.submit');
    Route::post('/tambahpesan','AdminController@tambahPesan')->name('tambah.pesan.admin');


});