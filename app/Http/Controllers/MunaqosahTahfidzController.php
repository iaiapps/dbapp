<?php

namespace App\Http\Controllers;

use App\Models\MunaqosahTahfidz;
use App\Models\TempStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MunaqosahTahfidzController extends Controller
{
   
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('munaqosah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'recommended_by'=>'required',
            'juz'=>'required',
            'exam_status'=>'required',
            'class_id'=>'required',
            'name'=>'required',
        ]);
        MunaqosahTahfidz::create($request->all());
        return back()->with('success','Pendaftaranmu Berhasil');
    }

  
    public function show()
    {
        $students = MunaqosahTahfidz::whereNull('grade')->get();
        return view('munaqosah.penguji',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MunaqosahTahfidz  $munaqosahTahfidz
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'exam_date'=>'required',
            'kelancaran'=>'required',
            'fasohah_makhroj'=>'required',
            'tajwid'=>'required',
            'examiner'=>'required',
        ]);
        if($request->kelancaran>69){
            $result = 'LULUS';
        }else{
            $result = 'REMIDI';
        }
        if($request->kelancaran>89){
            $grade = 'A+';
        }elseif($request->kelancaran<=89 && $request->kelancaran>=84 ){
            $grade = 'A';
        }elseif($request->kelancaran<84 && $request->kelancaran>=79 ){
            $grade = 'B+';
        }elseif($request->kelancaran<79 && $request->kelancaran>=74 ){
            $grade = 'B';
        }elseif($request->kelancaran<74 && $request->kelancaran>69 ){
            $grade = 'C+';
        }else{
            $grade = 'C';
        }
        $data = [
            'exam_date'=>$request->exam_date,
            'kelancaran'=>$request->kelancaran,
            'fasohah_makhroj'=>$request->fasohah_makhroj,
            'tajwid'=>$request->tajwid,
            'examiner'=>$request->examiner,
            'grade'=>$grade,
            'results'=>$result,
        ];
        MunaqosahTahfidz::where('id',$request->id)->update($data);
        return back()->with('success_uji','Berhasil');
    }

   public function hasilMunaqosah()
   {
       $munaqosah = MunaqosahTahfidz::get();
       return view('munaqosah.index',compact('munaqosah'));
   }
   public function cetak($id,$name)
   {
    $data= MunaqosahTahfidz::where('id',$id)->first();

    header('content-type:image/jpeg');
    $img_path =public_path('sertifikat_asset/sertifikat.jpg');
    $fontReg =public_path('sertifikat_asset/MYRIADPRO-REGULAR.OTF');
    $fontBold =public_path('sertifikat_asset/MYRIADPRO-BOLD.OTF');
    $image=imagecreatefromjpeg($img_path);
    $color=imagecolorallocate($image,19,21,22);
    $nama = strtoupper($name);
    // Get image Width and Height
    $image_width = imagesx($image);  
    $image_height = imagesy($image);
    // Get Bounding Box Size
    $text_box = imagettfbbox(90,0,$fontReg,$nama);
    $text_width = $text_box[2]-$text_box[0];
    $text_height = $text_box[7]-$text_box[1];
    // Calculate coordinates of the text
    $xx = ($image_width/2) - ($text_width/2);
    $y = ($image_height/2) - ($text_height/2);
    //Membubuhkan Nama
    imagettftext($image, 90, 0, $xx, 1480, $color, $fontReg, $nama);
    
    // habis nama di deklarasikan, kita langsung bubuhkan
    imagettftext($image,40,0,1687,2265,$color,$fontReg,$data->kelancaran);
    imagettftext($image,40,0,1687,2340,$color,$fontReg,$data->fasohah_makhroj);
    imagettftext($image,40,0,1687,2418,$color,$fontReg,$data->tajwid);
    imagettftext($image,50,0,333,1733,$color,$fontBold,"LULUS");
    imagettftext($image,54,0,1500,1733,$color,$fontBold,'Juz '. $data->juz);
    imagettftext($image,55,0,2250,1733,$color,$fontBold,$data->grade);
    
    //ini Tanggal
    // nama donk
    $tanggal = Carbon::parse($data->exam_date)->formatLocalized("%d %B %Y");
    // Get image Width and Height
    $image_width = imagesx($image);  
    $image_height = imagesy($image);
    // Get Bounding Box Size
    $text_box = imagettfbbox(85,0,$fontReg,$tanggal);
    $text_width = $text_box[2]-$text_box[0];
    $text_height = $text_box[7]-$text_box[1];
    // Calculate coordinates of the text
    $xx = ($image_width/2) - ($text_width/2);
    $y = ($image_height/2) - ($text_height/2);
    //Membubuhkan tanggal
    imagettftext($image, 85, 0, $xx, 2050, $color, $fontReg, $tanggal);    
    imagejpeg($image);
    imagedestroy($image);
   }
    public function customSertifikat(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'juz'=>'required',
            'exam_date'=>'required',
            'kelancaran'=>'required',
            'fasohah_makhroj'=>'required',
            'tajwid'=>'required',
            'grade'=>'required',
        ]);
        header('content-type:image/jpeg');
        $img_path =public_path('sertifikat_asset/sertifikat.jpg');
        $fontReg =public_path('sertifikat_asset/MYRIADPRO-REGULAR.OTF');
        $fontBold =public_path('sertifikat_asset/MYRIADPRO-BOLD.OTF');
        $image=imagecreatefromjpeg($img_path);
        $color=imagecolorallocate($image, 19, 21, 22);
        $nama = strtoupper($request->name);
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
        imagettftext($image, 40, 0, 1687, 2265, $color, $fontReg, $request->kelancaran);
        imagettftext($image, 40, 0, 1687, 2340, $color, $fontReg, $request->fasohah_makhroj);
        imagettftext($image, 40, 0, 1687, 2418, $color, $fontReg, $request->tajwid);
        imagettftext($image, 50, 0, 333, 1733, $color, $fontBold, "LULUS");
        imagettftext($image, 54, 0, 1500, 1733, $color, $fontBold, 'Juz '. $request->juz);
        imagettftext($image, 55, 0, 2250, 1733, $color, $fontBold, $request->grade);
        
        //ini Tanggal
        // nama donk
        $tanggal = Carbon::parse($request->exam_date)->formatLocalized("%d %B %Y");
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
        // tambahi path di parameter kedua untuk menyimpan di lokal(server)
        $fullPath = public_path('sertifikat_jadi/'.'j'.$request->juz.'-'.$request->name.'.jpg');
        imagejpeg($image,$fullPath);
        //gini aja buat download ke local, EZ bos. baru ketemu
        return Response()->download($fullPath);
        imagedestroy($image);
    }

}
