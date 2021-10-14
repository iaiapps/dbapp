<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Journal extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'activity', 'email', 'jam'];
    public function Teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
