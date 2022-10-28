<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempStudent extends Model
{
    use HasFactory;
    protected $fillable = ['class_id', 'name'];
    public function temp_class()
    {
        return $this->belongsTo(TempClass::class);
    }
}
