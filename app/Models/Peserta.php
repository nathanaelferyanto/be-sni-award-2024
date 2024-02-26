<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Peserta extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'Peserta';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'kategori_organisasi_id',
        'verify_key'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
    protected $cast = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];
}
