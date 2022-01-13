<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\ExtracurricularCategory;

class InfoKuotaEkskul extends Component
{
    public function render()
    {
        $ekskuls = ExtracurricularCategory::get();
        return view('livewire.info-kuota-ekskul',compact('ekskuls'));
    }
}
