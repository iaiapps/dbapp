<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acara extends Model
{
    use HasFactory;
    protected $table = 'acara';
    public function kategoriAcara()
    {
        return $this->belongsTo(KategoriAcara::class)->orderByDesc('id');
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'acara_teacher')->withPivot('created_at')->orderByDesc('id');
    }
}
