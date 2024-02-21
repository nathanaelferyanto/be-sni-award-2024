<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Berita extends Model
{
    // protected $fillable = ['judul_berita', 'deskripsi','tanggal','file'];
    protected $table ='berita';
    protected $guarded = [];

    public function kategori_berita() : BelongsTo
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id', 'id');
    }
}
