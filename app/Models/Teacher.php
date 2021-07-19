<?php

namespace App\Models;

use App\Models\Child;
use App\Models\Training;
use App\Models\Education;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];

    public function children()
    {
       return $this->hasMany(Child::class);
    }
    public function education()
    {
       return $this->hasMany(Education::class);
    }
    public function trainings()
    {
       return $this->hasMany(Training::class);
    }
    public function grade()
    {
       return $this->hasOne(Grade::class);
    }
}
