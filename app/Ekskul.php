<?php

namespace App;
use Auth;
use DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
 class Ekskul extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    public $incrementing = false;
    protected $table = "tb_ekskul";
    protected $primaryKey = 'kode_ekskul';
    protected $fillable = [
       'kode_ekskul','nama_ekskul','deksripsi', 'logo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // public function postLowongan(array $data){
     

       
    //     $pl                         = new PostLowongan;
    //     $pl->kode_lowongan          = str_random(10);
    //     $pl->posisi                 = $data['posisi'];
    //     $pl->gaji                   = $data['gaji'];
    //     $pl->deskripsi              = $data['deskripsi'];
    //     $pl->persyaratan            = $data['persyaratan'];
    //     $pl->lokasi                 = $data['lokasi'];
    //     $pl->kode_user_perusahaan   = $data['kode_user_perusahaan'];
    //     $pl->kode_perusahaan        = $data['kode_perusahaan'];
        
    //     $pl->save();
    // }
    // public function getLowongan(){
    //     $data = PostLowongan::all();
    //     return $data;
    // }

    public function getListEkskul(){
        $data = Ekskul::all();
        return $data;
    }
    public function getDataEkskulUser($nis)
    {
        $data = DB::table('tb_anggota_ekskul')->where('nis','=',$nis)->get();
        return $data;
    }
    public function getDataEkskulUser2($nis,$kode_ekskul){
        
        $data = DB::table('tb_anggota_ekskul')->where('nis','=',$nis)->where('kode_ekskul','=',$kode_ekskul)->first();
        return $data;
    }
    public function getDataEkskulKetua($nis){
        $data =  DB::table('tb_anggota_ekskul')
            ->leftJoin('users','tb_anggota_ekskul.nis','=','users.nis')
            ->rightJoin('tb_ekskul','tb_anggota_ekskul.kode_ekskul','=','tb_ekskul.kode_ekskul')
             ->where('tb_anggota_ekskul.jabatan','=','ketua','and','tb_anggota_ekskul.nis','=',$nis)
            ->select('tb_ekskul.nama_ekskul','tb_ekskul.kode_ekskul','users.nama','users.kelas','users.jenis_kelamin')->get();
            
        return $data;
    }
    
    public function getEkskulDetail($kode_ekskul){
        //$data = Ekskul::where('kode_ekskul',$kode_ekskul)->first();
        $data =  DB::table('tb_anggota_ekskul')
            ->leftJoin('users','tb_anggota_ekskul.nis','=','users.nis')
            ->rightJoin('tb_ekskul','tb_anggota_ekskul.kode_ekskul','=','tb_ekskul.kode_ekskul')
            ->rightJoin('tb_pelatih','tb_anggota_ekskul.kode_ekskul','=','tb_pelatih.kode_ekskul')
            ->rightJoin('tb_pembimbing','tb_anggota_ekskul.kode_ekskul','=','tb_pembimbing.kode_ekskul')
            ->where('tb_ekskul.kode_ekskul','=',$kode_ekskul)
            ->select('tb_ekskul.nama_ekskul','tb_ekskul.kode_ekskul','tb_pelatih.nama_pelatih','tb_pembimbing.nama_pembimbing','users.nama','users.kelas','users.jenis_kelamin')->get();
            
        return $data;
    }
    public function InsertAnggotaEkskul($nis,$kode_ekskul){
        DB::table('tb_anggota_ekskul')->insert([
             'nis' => $nis,
             'kode_ekskul' => $kode_ekskul,
             'jabatan' => 'anggota',
             'status' => 'diterima',
        ]);    
    }
}
