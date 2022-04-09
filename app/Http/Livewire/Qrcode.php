<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode as Qrin;

class Qrcode extends Component
{
    public $qrcode, $qrid;
    public $pesan = 'dsfsd';
    public function generate($qrid)
    {
        $qred = DB::table('presence_setting')
        ->where('id', $qrid)
        ->update(['value' => Str::random(10)]);

        $kode = DB::table('presence_setting')
        ->where('id', $qrid)->value('value');

        $image = Qrin::format('png')
                 ->merge('https://lh3.googleusercontent.com/-k1vjZQGneKU/AAAAAAAAAAI/AAAAAAAAAAA/aE921UQFSd4/s60-c-k-mo/photo.jpg', 0.1, true)
                 ->size(200)->errorCorrection('H')
                 ->generate($kode);

        $output_file = '/img/qr-code/qr-' . $kode . '.png';
        Storage::disk('local')->put($output_file, $image); 
    }
    public function render()
    {
        // $this->qrcode 
        $qrcode = DB::table('presence_setting')->where('desc','gedung1')->first()->value;
        $this->qrcode = $qrcode;
        return view('livewire.qrcode');
    }
}
