<?php

namespace App\Http\Controllers;
use Auth;
 use Illuminate\Http\Request;
use App\User;
use App\Ekskul;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $layout = 'layouts.main';
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['basoikan'] = $this->layout->title = 'dokumentasi';
        // $this->layout->content = View::make('welcome',$data);
        $data['basoikan'] = 'dokumentasi';
        return view('home')->with($data);
    }
    public function profile(){
        $us = new User;
        $data['dataUser'] = $us->getProfile(Auth::user()->nis); 
        return view('halaman.siswa.profile')->with($data);
    }
    public function kelolaEkskul(){
        
        $ek = new Ekskul;
         if ($ek->getDataEkskulUser3(Auth::user()->nis)) {
            return view('halaman.siswa.kelolaekskul');
        } else {
            return redirect('/');
        }
        
    }
    public function kelolaAnggotaEkskul(){
        $ek = new Ekskul;
        $kode_ekskul = Session::get('kode_ekskul');
        $data['dataEkskul'] = $ek->getAnggotaEkskul($kode_ekskul);
        return view('halaman.siswa.kelola-anggota-ekskul')->with($data);
    }
    public function kelolaEkskulPesan(){
        return view('halaman.siswa.kelola-pesan-ekskul');
    }
    public function addKelolaEkskulPesan(Request $request){
        $ek = new Ekskul;

        $nis = $request->nis;
        $kode_ekskul = $request->kode_ekskul;
        $nilai = $request->nilai;
        $ek->tambahNilaiAnggota($nis,$kode_ekskul,$nilai);
        return redirect('/kelolaekskul/kelolaanggotaekskul');
    }
    public function kelolaEkskulGaleri(){
        return view('halaman.siswa.kelola-ekskul-galeri');
    }
    public function addKelolaEkskulGaleri(Request $request){
        
    }
    public function kelolaInformasiEkskul(){
        return view('halaman.siswa.kelola-ekskul-informasi');
    }
    public function hapusAnggotaEkskul(Request $request){

        $ek = new Ekskul;
        $ek->hapusAnggota($request->nis,$request->kode_ekskul);

        return redirect('/');
    }
    public function shoFormKelolaAnggotaEkskul($nis){
        $ek = new Ekskul;
        $kode_ekskul = Session::get('kode_ekskul');
        $data['dataAnggota'] = $ek->getDataEkskulUser2($nis,$kode_ekskul);
        return view('halaman.siswa.kelola-anggota-ekskul-tambah-nilai')->with($data);  
     }
    
    public function tambahPesan(Request $request){
        $judul = $request->judul;
        $konten = $request->pesan;
        $tujuan = $request->tujuan;
        $pengirim = $request->pengirim;
        $ek = new Ekskul;
        $ek->tambahPesanEkskul($judul,$konten,$tujuan,$pengirim);
        return redirect('/');
    }
    public function prestasi(){
        return view('halaman.siswa.kelola-prestasi-ekskul');

    }
    public function addPrestasi(Request $request){
        $kode_ekskul = Session::get('kode_ekskul');
        $nama_prestasi = $request->nama_prestasi;
        $juara = $request->juara;
        $tingkat = $request->tingkat;
        $keterangan = $request->keterangan;
        $ek = new Ekskul;
        $ek->tambahPrestasiEkskul($kode_ekskul,$nama_prestasi,$juara,$tingkat,$keterangan);
        return redirect('/kelolaekskul');
    }
    public function informasiEkskul(){
        $ek = new Ekskul;
        $data['dataekskul'] = $ek->getDetailEkskul(Session::get('kode_ekskul'));
        return view('halaman.siswa.kelola-informasi-ekskul')->with($data);
    }
    public function editDeskripsi(Request $request){
        $ek = new Ekskul;
        $nama_ekskul = $request->nama_ekskul;
        $deskripsi = $request->deskripsi;
        $ek->editDeskripsi($nama_ekskul,$deskripsi,Session::get('kode_ekskul'));
        return redirect('/kelolaekskul');
    }
     
}
