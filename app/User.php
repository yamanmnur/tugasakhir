<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $incrementing = false;
    protected $primaryKey = 'nis';
    protected $fillable = [
        'nis','nama', 'kelas','agama','jenis_kelamin','alamat','foto','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getProfile($nis)
    {
        $data = User::where('nis',$nis)->first();
        return $data;
    }
}
