<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = 'presences';
    protected $guarded = [];
    protected $with = ['teacher'];

    public function teacher()
   {
      return $this->belongsTo(Teacher::class);
   }
}
