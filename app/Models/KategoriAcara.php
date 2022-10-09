<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAcara extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'kategori_acara';
    public function acaras()
    {
        return $this->hasMany(Acara::class);
    }
}
