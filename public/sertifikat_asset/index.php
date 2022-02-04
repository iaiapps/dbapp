<?php
// harus panggil header donk
header('content-type:image/jpeg');
// include font
$font="MYRIADPRO-REGULAR.OTF";
// gambar diambil dari format jpg
$image=imagecreatefromjpeg("sertifikat.jpg");
// meng alokasikan warna pada gambar (disini aku alokasikan RGB)
$color=imagecolorallocate($image,19,21,22);


// nama donk
$nama = strtoupper("m hasin ilmalik ghozali");
// Get image Width and Height
$image_width = imagesx($image);  
$image_height = imagesy($image);
// Get Bounding Box Size
$text_box = imagettfbbox(90,0,"MYRIADPRO-REGULAR.OTF",$nama);
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[7]-$text_box[1];
// Calculate coordinates of the text
$xx = ($image_width/2) - ($text_width/2);
$y = ($image_height/2) - ($text_height/2);
//Membubuhkan Nama
imagettftext($image, 90, 0, $xx, 1480, $color, $font, $nama);


//INI NILAI
$kelancaran="80";
$fasohah="90";
$tajwid="60";
$juz="Juz 28";
$predikat="A+";
// habis nama di deklarasikan, kita langsung bubuhkan
imagettftext($image,40,0,1687,2265,$color,"MYRIADPRO-REGULAR.OTF",$kelancaran);
imagettftext($image,40,0,1687,2340,$color,"MYRIADPRO-REGULAR.OTF",$fasohah);
imagettftext($image,40,0,1687,2418,$color,"MYRIADPRO-REGULAR.OTF",$tajwid);
imagettftext($image,50,0,333,1733,$color,"MYRIADPRO-BOLD.OTF","LULUS");
imagettftext($image,50,0,1505,1733,$color,"MYRIADPRO-BOLD.OTF",$juz);
imagettftext($image,55,0,2250,1733,$color,"MYRIADPRO-BOLD.OTF",$predikat);

//ini Tanggal
// nama donk
$tanggal = "27 Januari 2021";
// Get image Width and Height
$image_width = imagesx($image);  
$image_height = imagesy($image);
// Get Bounding Box Size
$text_box = imagettfbbox(85,0,"MYRIADPRO-REGULAR.OTF",$tanggal);
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[7]-$text_box[1];
// Calculate coordinates of the text
$xx = ($image_width/2) - ($text_width/2);
$y = ($image_height/2) - ($text_height/2);
//Membubuhkan tanggal
imagettftext($image, 85, 0, $xx, 2050, $color, "MYRIADPRO-REGULAR.OTF", $tanggal);



imagejpeg($image);
imagedestroy($image);
?>