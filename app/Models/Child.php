<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    use HasFactory;
    protected $fillable=[
        'teacher_id',
        'nama',
        'jenjang_pendidikan',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
    ];

    public function teacher()
    {
    	return $this->belongsTo(Teacher::class);
    }
}
