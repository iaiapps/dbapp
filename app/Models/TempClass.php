<?php

namespace App\Models;

use App\Models\TempStudent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TempClass extends Model
{
    use HasFactory;
    protected $table = 'temp_classes';
    public function tempStudents()
    {
        return $this->hasMany(TempStudent::class);
    }
}
