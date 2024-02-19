<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Berita extends Model
{
    // protected $fillable = ['judul_berita', 'deskripsi','tanggal','file'];
    protected $guarded = [];
    protected $table ='berita';

    public function kategori_berita(): HasMany
    {
        return $this->hasMany(KategoriBerita::class);
    }
}
