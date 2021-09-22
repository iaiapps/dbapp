<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
//    public function proses_upload(Request $request){
       
//         $this->validate($request, [
//             'dokumen' => 'required',
//         ]);

//        // menyimpan data file yang diupload ke variabel $file
//        $file = $request->file('dokumen');

//        // nama file
//        echo 'File Name: '.$file->getClientOriginalName();
//        echo '<br>';

//        // ekstensi file
//        echo 'File Extension: '.$file->getClientOriginalExtension();
//        echo '<br>';

//        // real path
//        echo 'File Real Path: '.$file->getRealPath();
//        echo '<br>';

//        // ukuran file
//        echo 'File Size: '.$file->getSize();
//        echo '<br>';

//        // tipe mime
//        echo 'File Mime Type: '.$file->getMimeType();

//        // isi dengan nama folder tempat kemana file diupload
//        $tujuan_upload = 'dokumen';
//        $file->move($tujuan_upload, $file->getClientOriginalName());
//    }


    public function store(Request $request)
    {       
        //cek, yang upload guru atau siswa?
        $nisn = Auth::user()->nisn;

        //validaasi
        $request->validate([
            'document_type_id' => 'required',
            'dokumen.*' => 'mimes:jpg,jpeg,png|max:1000'
        ]);

        // jika ada yang di upload
        if ($request->hasfile('dokumen')) {    
            //JIKA DIA GURU atau $nisn = null 
            if($nisn==null){
                //ambil data pengguna
                $email = Auth::user()->email;
                $guru = Teacher::where('email',$email)->first();
                $id = $guru->id;
                $nama = $guru->nama;

                // ubah nama file dan upload berkas
                $filename = $nama.' - '.round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('dokumen')->getClientOriginalName());
                $request->file('dokumen')->move(public_path('documnet_images'), $filename);
                // simpan ke database
                Document::create(
                        [                        
                            'document_type_id' =>$request->document_type_id,
                            'file' =>$filename,
                            'teacher_id' =>$id,
                        ]
                    );
                // Lempar
                return redirect()->route('guru.upload_dokumen')->with('success','Dokumen berhasil di upload');

            //Jika DIA SISWA
            }else{
                $siswa = Student::where('nisn', $nisn)->first();
                $id = $siswa->id;
                $nama = $siswa->nama;

                 // ubah nama file dan upload berkas
                $filename = $nama.' - '.round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('dokumen')->getClientOriginalName());
                $request->file('dokumen')->move(public_path('documnet_images'), $filename);
                //Simpan ke DB
                Document::create(
                    [
                        'document_type_id' =>$request->document_type_id,
                        'file' =>$filename,
                        'student_id' =>$id,
                    ]
                );
                //Lempar
                return redirect()->route('siswa.upload_dokumen')->with('success', 'Dokumen berhasil di upload');
            }
        }else{
            echo'Gagal';
        }
       
    }
}
