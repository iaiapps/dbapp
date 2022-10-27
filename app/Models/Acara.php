<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acara extends Model
{
    use HasFactory;
    protected $table = 'acara';
    protected $guarded = [];
    // // this is a recommended way to declare event handlers
    // public static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($acara) { // before delete() method call this
    //         $acara->teachers()->delete();
    //         // do the rest of the cleanup...
    //     });
    // }
    // protected static function booted()
    // {
    //     static::deleting(function ($acara) {
    //         $acara->teachers()->detach();
    //     });
    // }
    public function kategoriAcara()
    {
        return $this->belongsTo(KategoriAcara::class)->orderByDesc('id');
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'acara_teacher')->withPivot('created_at')->orderByDesc('id');
    }
}
