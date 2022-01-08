<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ExtracurricularCategory;
use App\Models\ExtracurricularData;

class DataEkskul extends Component
{
    public $eks_id = null;
    public $ekskuls = null;
    public function render()
    {
        $ekskulCategory=ExtracurricularCategory::get();
        return view('livewire.data-ekskul',compact('ekskulCategory'));
    }
    public function choose($id,$name)
    {
        $this->ekskuls = ExtracurricularData::where('extra_id',$id)->get();
        // $this->ekskuls = $id;
    }

}
