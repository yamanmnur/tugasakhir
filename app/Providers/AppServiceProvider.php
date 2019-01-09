<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Ekskul;
use Auth;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*',function($view){
            
            $data = new Ekskul;
            if (Auth::check()) {
                $ek = $data->getDataEkskulUser(Auth::user()->nis);
                $num = null;
                foreach ($ek as $item) {
                    
                    if ($item->jabatan == "ketua") {
                        $num = "ketua";
                        break;
                    }
                    $num = 'anggota';
        
                }
                if ($num == "ketua") {
                    $dat = $data->getDataEkskulKetua(Auth::user()->nis);
                    Session::put('kode_ekskul',$dat[0]->kode_ekskul);
                    $view->with('nama_ekskul',$dat[0]->nama_ekskul);
                    $view->with('basoikan','ketua');    
                } else {
                    $view->with('basoikan','null');
                }
            } else {
                
                $view->with('basoikan','null');

            }
        });

        
        
      
        
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
