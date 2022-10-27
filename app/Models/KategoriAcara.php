<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAcara extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'kategori_acara';

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($kategori) { // before delete() method call this
            $kategori->acaras()->delete();
            // do the rest of the cleanup...
        });
    }
    public function acaras()
    {
        return $this->hasMany(Acara::class);
    }
}
