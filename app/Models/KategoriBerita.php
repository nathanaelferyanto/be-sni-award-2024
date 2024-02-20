<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriBerita extends Model
{
    // protected $fillable = ['judul_berita', 'deskripsi','tanggal','file'];
    protected $guarded = [];
    protected $table = 'kategori_berita';

    public function berita() : HasMany
    {
        return $this->hasMany(Berita::class, 'kategori_berita_id', 'id');
    }
}
