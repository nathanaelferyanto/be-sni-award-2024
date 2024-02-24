<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagBerita extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];
    protected $guarded = [];
    protected $table = 'tag_berita';
}
