<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sail\Console\PublishCommand;

class KategoriBerita extends Model
{
    // protected $fillable = ['judul_berita', 'deskripsi','tanggal','file'];
    protected $guarded = [];
    protected $table = 'kategori_berita';

    public function berita(): BelongsTo
    {
        return $this->belongsTo(Berita::class);
    }
}
