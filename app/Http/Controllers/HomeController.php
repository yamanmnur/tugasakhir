<?php

namespace App\Http\Controllers;
use Auth;
 use Illuminate\Http\Request;
use App\User;
use App\Ekskul;
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
        $user = $ek->getDataEkskulUser(Auth::user()->nis);
        if ($user->jabatan = 'ketua') {
            return view('halaman.siswa.kelolaekskul');
        } else {
            return redirect('/');
        }
        
    }
}
