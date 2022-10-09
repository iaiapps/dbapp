<?php

namespace App\Models;

use App\Models\Acara;
use App\Models\Child;
use App\Models\Journal;
use App\Models\Document;
use App\Models\Presence;
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
   public function documents()
   {
      return $this->hasMany(Document::class);
   }
   public function journals()
   {
      return $this->hasMany(Journal::class);
   }
   public function presences()
   {
      return $this->hasMany(Presence::class);
   }
   public function acaras()
   {
      return $this->belongsToMany(Acara::class, 'acara_teacher')->withPivot('created_at')
         ->orderByDesc('id');
   }
}
