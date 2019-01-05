<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Auth;
use App\Ekskul;
 use Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


class EkskulController extends Controller
{
    //

    public function index(){    
        View::share('basoikan','macam macam');
        $ek = new Ekskul;
        $data['alldata'] = $ek->getListEkskul();
        if (Auth::check()) {
            $data['datauser'] = $ek->getDataEkskulUser(Auth::user()->nis);
            return view('halaman.listekskul')->with($data);

        } else {
            $data['datauser'] = 'kosong';
            return view('halaman.listekskul')->with($data);

        }
        
       
    }
    public function kelolaEkskul(){
        
    }
    public function detailEkskul($kode_ekskul){
        $ek = new Ekskul;
        
        if (count($ek->getEkskulDetail($kode_ekskul)) == null) {
            # code...
            return 'data tidak ada';
            
        } else {
            # code...
        
        
            $data['detailEkskul'] = $ek->getEkskulDetail($kode_ekskul);
            if (Auth::check()) {
                if ($ek->getDataEkskulUser2(Auth::user()->nis,$kode_ekskul)) {
                    # code...
                    $data['detailUserEkskul'] = 'ada';

                } else {
                    # code...
                    $data['detailUserEkskul'] = 'tidakada';

                }
                
            }
            return view('halaman.detailekskul')->with($data);
        }
    }

    public function daftaranggota(Request $request){
        $data = new Ekskul;
        
        $data->InsertAnggotaEkskul(Auth::user()->nis,$request->kode_ekskul);
        return 'data berhasil ditambahkan';
    }
}
