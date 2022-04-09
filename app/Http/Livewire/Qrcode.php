<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Qrcode extends Component
{
    public $qrcode;
    public function render()
    {
        $this->qrcode = DB::table('presence_setting')->where('name','qrcode')->get();
        return view('livewire.qrcode');
    }
}
