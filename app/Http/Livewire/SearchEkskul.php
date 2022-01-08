<?php

namespace App\Http\Livewire;

use App\Models\ExtracurricularData;
use App\Models\TempStudent;
use Livewire\Component;


class SearchEkskul extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.search-ekskul',[
            'ekskuls'=>ExtracurricularData::where('name','LIKE','%'.$this->search.'%')->get()
        ]);
    }
}
