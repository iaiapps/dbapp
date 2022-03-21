<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtracurricularData extends Model
{
    use HasFactory;
    protected $fillable = ['name','class_id','student_id','extra_id','optional'];

    public function student()
    {
        return $this->belongsTo(TempStudent::class);
    }
    public function class()
    {
        return $this->belongsTo(TempClass::class);
    }
    public function extra()
    {
        return $this->belongsTo(ExtracurricularCategory::class);
    }
}
