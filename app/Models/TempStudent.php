<?php

namespace App\Models;

use App\Models\TempClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TempStudent extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'name'];
    public function temp_class()
    {
        return $this->belongsTo(TempClass::class);
    }
    public function acaras()
    {
        return $this->belongsToMany(Acara::class, 'acara_student')->withPivot('created_at')
            ->orderByDesc('id');
    }
}
