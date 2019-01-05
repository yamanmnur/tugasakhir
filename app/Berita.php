<?php

namespace App;
use Auth;
use DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
 
class Berita extends Model
{
    public function getPesan(){
        $data =  DB::table('tb_artikel')
        ->where('tujuan','=','semua')
        ->get();
        
    return $data;
    }
}
