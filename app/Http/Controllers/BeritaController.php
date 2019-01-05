<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Auth;
  use Session;
use App\Berita;

class BeritaController extends Controller
{
    //

    public function index(){
         $ek = new Berita;
         $data['alldata'] = $ek->getPesan();
        return view('halaman.berita')->with($data);
    }
}
