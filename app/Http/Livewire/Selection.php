<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TempClass;

class Selection extends Component
{
    public $selectedClass = null;
    public $siswa = "";
    public function render()
    {       
        $classes = TempClass::get();
        return view('livewire.selection',compact('classes'));
    }
}
