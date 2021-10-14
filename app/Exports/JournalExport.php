<?php

namespace App\Exports;

use App\Models\Journal;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class JournalExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
    public function query()
    {
        return Journal::where('email', Auth::user()->email);
    }
    public function map($student): array
    {
        $date = \Carbon\Carbon::parse($student->date);

        return [
            $date->isoFormat('dddd'),
            $date->isoFormat('D MMM Y'),
            $student->activity,
            $student->jam,
            // $student->jk,
            // $student->nisn,
            // $student->tempat_lahir,
            // $student->tanggal_lahir,
            // $student->nik,
            // $student->agama,
            // $student->alamat,
            // $student->rt,
            // $student->rw,
            // $student->dusun,
            // $student->kelurahan,
            // $student->kecamatan,
            // $student->kode_pos,
            // $student->jenis_tinggal,
            // $student->alat_transportasi,
            // $student->telepon,
            // $student->hp,
            // $student->email,
            // $student->skhun,
            // $student->penerima_kps,
            // $student->no_kps,
            // $student->nama_ayah,
            // $student->tanggal_lahir_ayah,
            // $student->pendidikan_ayah,
            // $student->pekerjaan_ayah,
            // $student->penghasilan_ayah,
            // $student->nik_ayah,
            // $student->nama_ibu,
            // $student->tanggal_lahir_ibu,
            // $student->pendidikan_ibu,
            // $student->pekerjaan_ibu,
            // $student->penghasilan_ibu,
            // $student->nik_ibu,
            // $student->nama_wali,
            // $student->tanggal_lahir_wali,
            // $student->pendidikan_wali,
            // $student->pekerjaan_wali,
            // $student->penghasilan_wali,
            // $student->nik_wali,
            // $student->rombel_saat_ini,
            // $student->no_un,
            // $student->no_ijazah,
            // $student->penerima_kip,
            // $student->no_kip,
            // $student->no_kks,
            // $student->no_akta,
            // $student->bank,
            // $student->no_rekening,
            // $student->rekening_atas_nama,
            // $student->layak_pip,
            // $student->alasan_layak_pip,
            // $student->kebutuhan_khusus,
            // $student->sekolah_asal,
            // $student->anak_ke,
            // $student->lintang,
            // $student->bujur,
            // $student->no_kk,
            // $student->berat_badan,
            // $student->tinggi_badan,
            // $student->lingkar_kepala,
            // $student->jumlah_saudara_kandung,
            // $student->jarak_rumah_ke_sekolah,
            // $student->hp_ayah,
            // $student->hp_ibu,
            // $student->hp_wali,
            // $student->kota,
            // $student->provinsi,
        ];
    }
    public function headings(): array
    {
        return [
            'Hari',
            'Tanggal',
            'Aktivitas',
            'Jumlah jam',
            // 'jk',
            // 'nisn',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'nik',
            // 'agama',
            // 'alamat',
            // 'rt',
            // 'rw',
            // 'dusun',
            // 'kelurahan',
            // 'kecamatan',
            // 'kode_pos',
            // 'jenis_tinggal',
            // 'alat_transportasi',
            // 'telepon',
            // 'hp',
            // 'email',
            // 'skhun',
            // 'penerima_kps',
            // 'no_kps',

            // 'nama_ayah',
            // 'tanggal_lahir_ayah',
            // 'pendidikan_ayah',
            // 'pekerjaan_ayah',
            // 'penghasilan_ayah',
            // 'nik_ayah',

            // 'nama_ibu',
            // 'tanggal_lahir_ibu',
            // 'pendidikan_ibu',
            // 'pekerjaan_ibu',
            // 'penghasilan_ibu',
            // 'nik_ibu',

            // 'nama_wali',
            // 'tanggal_lahir_wali',
            // 'pendidikan_wali',
            // 'pekerjaan_wali',
            // 'penghasilan_wali',
            // 'nik_wali',

            // 'rombel_saat_ini',
            // 'no_un',
            // 'no_ijazah',
            // 'penerima_kip',
            // 'no_kip',
            // 'no_kks',
            // 'no_akta',
            // 'bank',
            // 'no_rekening',
            // 'rekening_atas_nama',
            // 'layak_pip',
            // 'alasan_layak_pip',
            // 'kebutuhan_khusus',

            // 'sekolah_asal',
            // 'anak_ke',
            // 'lintang',
            // 'bujur',
            // 'no_kk',
            // 'berat_badan',
            // 'tinggi_badan',
            // 'lingkar_kepala',
            // 'jumlah_saudara_kandung',
            // 'jarak_rumah_ke_sekolah',

            // 'hp_ayah',
            // 'hp_ibu',
            // 'hp_wali',
            // 'kota',
            // 'provinsi',
        ];
    }
}
