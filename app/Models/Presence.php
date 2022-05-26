<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = 'presences';
      protected $fillable = [
         'teacher_id',
         'date',
         'time_in',
         'time_out',
         'is_late',
         'overtime',
         'note',
         'created_at',
         'updated_at'
      ];
    protected $with = ['teacher'];

    public function teacher()
   {
      return $this->belongsTo(Teacher::class);
   }
}
