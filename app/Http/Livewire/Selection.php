<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TempClass;
use App\Models\TempStudent;
use Illuminate\Support\Facades\DB;
use App\Models\ExtracurricularCategory;
use App\Models\ExtracurricularData;

class Selection extends Component
{
    public $selectedClass = null;
    public $selectedStudent = null;
    public $selectedEkskul = null;
    public $students = null;
    public $ekskul = null;
    
    public function render()
    {       
        $classes = TempClass::get();
        return view('livewire.selection',compact('classes'));
    }
    public function updatedSelectedClass($class_id)
    {
        $this->students = TempStudent::where('class_id',$class_id)->get();
    }
    public function updatedSelectedStudent($student_id)
    {
        // $this->ekskul=ExtracurricularData::groupBy('extra_id')
        // ->having(DB::raw('count(extra_id)'), '<=', 2)
        // ->get('extra_id');
        $this->ekskul=ExtracurricularData::get();
    }
    
}
