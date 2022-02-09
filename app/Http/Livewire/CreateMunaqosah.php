<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TempClass;
use App\Models\TempStudent;
use Illuminate\Support\Facades\DB;
use App\Models\ExtracurricularData;
use App\Models\ExtracurricularCategory;

class CreateMunaqosah extends Component
{
    public $selectedClass = null;
    public $selectedStudent = null;
    public $selectedEkskul = null;
    public $students = null;
    public $ekskul = null;
    
    public function render()
    {       
        $classes = TempClass::get();
        return view('livewire.create-munaqosah',compact('classes'));
    }
    public function updatedSelectedClass($class_id)
    {
        $this->students = TempStudent::where('class_id',$class_id)->get();
    }
}
