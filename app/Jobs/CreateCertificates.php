<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use App\Models\MunaqosahTahfidz;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class CreateCertificates implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $data;
    // private $post = null;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function handle()
    {
            header('content-type:image/jpeg');
            $img_path =public_path('sertifikat_asset/sertifikat.jpg');
            $fontReg =public_path('sertifikat_asset/MYRIADPRO-REGULAR.OTF');
            $fontBold =public_path('sertifikat_asset/MYRIADPRO-BOLD.OTF');
            $image=imagecreatefromjpeg($img_path);
            $color=imagecolorallocate($image, 19, 21, 22);
            $nama = strtoupper($this->data->name);
            // Get image Width and Height
            $image_width = imagesx($image);
            $image_height = imagesy($image);
            // Get Bounding Box Size
            $text_box = imagettfbbox(90, 0, $fontReg, $nama);
            $text_width = $text_box[2]-$text_box[0];
            $text_height = $text_box[7]-$text_box[1];
            // Calculate coordinates of the text
            $xx = ($image_width/2) - ($text_width/2);
            $y = ($image_height/2) - ($text_height/2);
            //Membubuhkan Nama
            imagettftext($image, 90, 0, $xx, 1480, $color, $fontReg, $nama);
        
            // habis nama di deklarasikan, kita langsung bubuhkan
            imagettftext($image, 40, 0, 1687, 2265, $color, $fontReg, $this->data->kelancaran);
            imagettftext($image, 40, 0, 1687, 2340, $color, $fontReg, $this->data->fasohah_makhroj);
            imagettftext($image, 40, 0, 1687, 2418, $color, $fontReg, $this->data->tajwid);
            imagettftext($image, 50, 0, 333, 1733, $color, $fontBold, "LULUS");
            imagettftext($image, 54, 0, 1500, 1733, $color, $fontBold, 'Juz '. $this->data->juz);
            imagettftext($image, 55, 0, 2250, 1733, $color, $fontBold, $this->data->grade);
        
            //ini Tanggal
            // nama donk
            $tanggal = Carbon::parse($this->data->exam_date)->formatLocalized("%d %B %Y");
            // Get image Width and Height
            $image_width = imagesx($image);
            $image_height = imagesy($image);
            // Get Bounding Box Size
            $text_box = imagettfbbox(85, 0, $fontReg, $tanggal);
            $text_width = $text_box[2]-$text_box[0];
            $text_height = $text_box[7]-$text_box[1];
            // Calculate coordinates of the text
            $xx = ($image_width/2) - ($text_width/2);
            $y = ($image_height/2) - ($text_height/2);
            //Membubuhkan tanggal
            imagettftext($image, 85, 0, $xx, 2050, $color, $fontReg, $tanggal);
            $fullPath = public_path('sertifikat_jadi/'.'j'.$this->data->juz.'-'.$this->data->name.'.jpg');
            imagejpeg($image, $fullPath);
            //gini aja buat download ke local, EZ bos. baru ketemu
            // return Response()->download($fullPath);
            imagedestroy($image);
    }
}
