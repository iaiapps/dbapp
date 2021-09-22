<?php

namespace App\Models;

use App\Models\{Student,Teacher};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function document_type()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
