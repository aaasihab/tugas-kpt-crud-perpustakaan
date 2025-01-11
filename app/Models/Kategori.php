<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama', 'keterangan', 'status'];

    public function buku(): HasMany
    {
        return $this->hasMany(Buku::class, 'kategori_id', 'id_kategori');
    }

}
