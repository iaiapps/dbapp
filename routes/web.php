<?php

use Carbon\Carbon;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Grade;
use App\Models\TempClass;
use App\Models\TempStudent;
use App\Models\MunaqosahTahfidz;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\JournalIndex;
use App\Models\ExtracurricularData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SiswaController;
use Psy\CodeCleaner\ValidConstructorPass;
use PHPUnit\Framework\Constraint\Operator;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AcaraController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\MunaqosahTahfidzController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ExtracurricularDataController;

// developer mode only
// comment if production starting
// =====================================
// function __construct()
// {
//     Artisan::call('config:clear');
//     Artisan::call('cache:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     Artisan::call('route:cache');
// }
// =====================================

Route::get(
    'rj',
    function () {
        Artisan::call('queue:work');
        return 'Job Berhasil di hapus';
    }
);

Route::get(
    'cj',
    function () {
        Artisan::call('queue:clear');
    }
);

Route::get('cekImagick', function () {

    if (!extension_loaded('imagick')) {
        echo 'imagick not installed';
    }
    // phpinfo();
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
// Route::get('/login_siswa',function (){
//     return view('auth.login_siswa');
// })->name('login.siswa');
Route::get('/login_siswa', [LoginController::class, 'siswaLogin'])->name('login.siswa');

// ROUTE::ADMIN
Route::middleware('role:admin')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('grade', GradeController::class);
    Route::prefix('/admin')->group(function () {

        Route::put('/presence/setting', [AdminController::class, 'updateSettingPresence'])->name('admin.update.setPresence');
        Route::get('/db_settings', [AdminController::class, 'dbSettings'])->name('admin.DBset');
        Route::get('/edit_set_presence/{id}', [AdminController::class, 'editPresenceSetting'])->name('admin.editSettingPresence');
        Route::get('/edit_db_set/{id}', [AdminController::class, 'editDbset'])->name('admin.editDbset');
        Route::delete('/hapus_db_set/{id}', [AdminController::class, 'hapusDbset'])->name('admin.hapusDbset');

        Route::get('/users', [UserController::class, 'index'])->name('admin.users');
        Route::get('/tambah_user', [UserController::class, 'addUser'])->name('tambah_user');
        // Route::get('/tambah_user', function () {
        //     return view('user.create');
        // })->name('tambah_user');
        Route::post('/users/import', [UserController::class, 'import'])->name('admin.import_users');

        Route::post('/students/import/tempstudent', [StudentController::class, 'importTempStudent'])->name('admin.import_temp_students');
        Route::post('/students/import', [StudentController::class, 'import'])->name('admin.import_students');
        Route::post('/teachers/import', [TeacherController::class, 'import'])->name('admin.import_teachers');
        Route::get('/students/export', [StudentController::class, 'export'])->name('admin.export_students');
        Route::get('/teachers/export', [TeacherController::class, 'export'])->name('admin.export_teachers');

        Route::post('/create_user', [AdminController::class, 'createUser'])->name('admin.create_user');
    });
});

// ROUTE::OPERATOR
Route::middleware('role:operator|admin')->group(function () {
    Route::prefix('operator')->group(function () {
        Route::get('/students', [OperatorController::class, 'getStudents'])->name('students');
        Route::get('/student/{id}', [OperatorController::class, 'getStudent'])->name('student_detail');
        Route::get('/student/edit/{id}', [OperatorController::class, 'editStudent'])->name('student_edit');
        Route::put('/student/edit/{id}', [OperatorController::class, 'updateStudent'])->name('student_update');
        Route::delete('/student/{id}', [OperatorController::class, 'destroy'])->name('student_delete');
        Route::get('/import', [OperatorController::class, 'import']);

        Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
        Route::get('/teacher/{id}', [TeacherController::class, 'show'])->name('teacher_detail');
        Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher_edit');
        Route::put('/teacher/edit/{id}', [TeacherController::class, 'update'])->name('teacher_update');
        Route::delete('/teacher/{id}', [TeacherController::class, 'destroy'])->name('teacher_delete');

        Route::get('/revisi_data', [OperatorController::class, 'revisiData'])->name('operator.revisi_data');
        Route::get('/compare_revisi/{id}', [OperatorController::class, 'compareRevisi'])->name('compare_revisi');

        Route::get('/identitas_sekolah', [OperatorController::class, 'schoolId'])->name('operator.school_id');
        Route::get('/identitas_sekolah/{id}', [OperatorController::class, 'editSchool'])->name('operator.edit_schoolid');
        Route::put('/identitas_sekolah/{id}', [OperatorController::class, 'updateSchool'])->name('operator.update_schoolid');

        Route::get('/siswa_kelas/{id}', [OperatorController::class, 'siswaKelas'])->name('operator.siswa_kelas');
    });
});


// ROUTE::GURU
Route::get('/guru/input', [TeacherController::class, 'input'])->name('teachers_page.input');
Route::middleware('role:guru|karyawan}')->group(function () {
    Route::prefix('guru')->group(function () {
        route::post('input', [TeacherController::class, 'inputData'])->name('teachers.input_data');
        route::get('/biodata', [TeacherController::class, 'biodata'])->name('teachers.biodata');
        Route::get('/edit', [TeacherController::class, 'editTeacher'])->name('teachers.edit');
        Route::put('/edit', [TeacherController::class, 'updateTeacher'])->name('teachers.update');

        Route::get('/upload_dokumen', [TeacherController::class, 'uploadDokumen'])->name('teachers.upload_dokumen');

        route::get('/tambah_pendidikan', function () {
            return view('teachers_page.tambah_pendidikan');
        })->name('teachers.tambah_pendidikan');
        route::post('/tambah_pendidikan', [TeacherController::class, 'inputPendidikan'])->name('teachers.input_pendidikan');

        route::get('/tambah_anak', function () {
            return view('teachers_page.tambah_anak');
        })->name('teachers.tambah_anak');
        route::post('/tambah_anak', [TeacherController::class, 'inputAnak'])->name('teachers.input_anak');

        route::get('/tambah_diklat', function () {
            return view('teachers_page.tambah_diklat');
        })->name('teachers.tambah_diklat');
        route::post('/tambah_diklat', [TeacherController::class, 'inputDiklat'])->name('teachers.input_diklat');

        route::delete('/hapus_pendidikan/{id}', [TeacherController::class, 'hapusPendidikan'])->name('teachers.hapus_pendidikan');
        route::delete('/hapus_diklat/{id}', [TeacherController::class, 'hapusDiklat'])->name('teachers.hapus_diklat');
        route::delete('/hapus_anak/{id}', [TeacherController::class, 'hapusAnak'])->name('teachers.hapus_anak');

        route::get('/journal', function () {
            return view('teachers_page.jurnal');
        });
        route::get('/journal_export', [JournalIndex::class, 'exportExcel'])->name('journal_export');
    });
});


// ROUTE::SISWA
Route::middleware('role:siswa')->group(function () {
    Route::prefix('siswa')->group(function () {
        Route::get('/data', [SiswaController::class, 'data'])->name('siswa.data');
        Route::get('/student/edit', [SiswaController::class, 'editStudent'])->name('siswa_edit');
        Route::put('/student/edit', [SiswaController::class, 'ajukanUpdate'])->name('siswa_update');
        Route::get('/prestasi', [SiswaController::class, 'achievement'])->name('siswa_prestasi');
        Route::post('/input_prestasi', [SiswaController::class, 'inputAchievement'])->name('siswa.input_prestasi');
        Route::delete('/hapus_prestasi/{id}', [SiswaController::class, 'deleteAchievement'])->name('siswa.hapus_prestasi');
        Route::get('/pengajuan_revisi', [SiswaController::class, 'pengajuanRevisi'])->name('siswa.pengajuan_revisi');
        Route::get('/upload_dokumen', [SiswaController::class, 'uploadDokumen'])->name('siswa.upload_dokumen');
    });
});

Route::post('/upload', [DocumentController::class, 'store'])->name('document.store');

route::get('keluar', [LoginController::class, 'keluar'])->name('keluar');
route::get('klaim_nis', function () {
    return view('auth.cek_nis');
})->name('klaim_nis');
route::post('input_klaim_nis', [SocialiteController::class, 'inputKlaimNis'])->name('input_klaim_nis');

route::get('sebagai', function () {
    return view('auth.sebagai');
})->name('tentukan_role');

route::get('cek_nis', [LoginController::class, 'cekNis'])->name('cek_nis');

//Login Google
Route::get('auth/google_guru', [SocialiteController::class, 'guru_redirectToGoogle'])->name('login_guru_google');
Route::get('auth/google_siswa', [SocialiteController::class, 'siswa_redirectToGoogle'])->name('login_siswa_google');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
Route::get('auth/google/reset/{id}', [ResetPasswordController::class, 'reset']);

Route::get('change-password', [ChangePasswordController::class, 'index'])->name('ganti-pass');
Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

// Ekskul
route::get('data_ekskul', [ExtracurricularDataController::class, 'index'])->name('ekskul.index');
route::get('pilih_ekskul', [ExtracurricularDataController::class, 'create'])->name('ekskul.create');
route::post('/ekskul_post', [ExtracurricularDataController::class, 'store'])->name('ekskul.store');
route::get('/coba', [CobaController::class, 'hitungEkskul']);
Route::get('/ekskul/export', [ExtracurricularDataController::class, 'export'])->name('ekskul.export');
Route::delete('/ekskul/delete/{id}', [ExtracurricularDataController::class, 'destroy'])->name('ekskul.delete');

//Munaqosah
Route::get('daftar_munaqosah', [MunaqosahTahfidzController::class, 'create']);
Route::post('daftar_munaqosah', [MunaqosahTahfidzController::class, 'store'])->name('munaqosah.store');
Route::get('penguji', [MunaqosahTahfidzController::class, 'show'])->name('munaqosah.show');
Route::post('penguji', [MunaqosahTahfidzController::class, 'update'])->name('munaqosah.update');
Route::get('hasil_munaqosah', [MunaqosahTahfidzController::class, 'hasilMunaqosah'])->name('munaqosah.hasil');
Route::get('cetak_sertifikat/{id}/{name}', [MunaqosahTahfidzController::class, 'cetak'])->name('munaqosah.cetak');
Route::get('custom_sertifikat', function () {
    return view('munaqosah.custom');
});
Route::post('custom_sertifika', [MunaqosahTahfidzController::class, 'customSertifikat'])->name('munaqosah.custom');
Route::get('export_all_sertifikat', [MunaqosahTahfidzController::class, 'exportJpgAll'])->name('munaqosah.exportAll');

//Inventaris Bos
Route::get('inventaris', [InventoryController::class, 'getInventory'])->name('inventaris.index');
Route::post('inventaris', [InventoryController::class, 'storeInventory'])->name('inventaris.store');
Route::get('inventaris/{id}', [InventoryController::class, 'detailInventory'])->name('inventaris.details');
Route::get('inventaris/edit/{id}', [InventoryController::class, 'editInventory'])->name('inventaris.edit');
Route::put('inventaris/edit/{id}', [InventoryController::class, 'updateInventory'])->name('inventaris.update');
Route::delete('inventaris/{id}', [InventoryController::class, 'hapusInventory'])->name('inventaris.delete');

//Presensi
Route::get('edit_jam',  [PresenceController::class, 'editJam'])->name('presence.edit_jam');
Route::put('update_jam',  [PresenceController::class, 'updateJam'])->name('presence.update_jam');
Route::get('presence/daterange', [PresenceController::class, 'betweenDate'])->name('presence.daterange');
Route::get('presence/exportExcel', [PresenceController::class, 'exportExcel'])->name('presence.excel');
Route::get('presence/monthly', [PresenceController::class, 'monthlyPresence'])->name('presence.monthly');
Route::resource('presence', PresenceController::class);
Route::post('qrcode/update', [PresenceController::class, 'updateQrCode'])->name('qrcode.update');

//kehadiranAcara
Route::middleware('role:operator|admin')->group(function () {
    // Route::get('/admin/acara/index', [AcaraController::class, 'index'])->name('admin.acara.index');
    Route::get('/acara/index', [AcaraController::class, 'acaraIndex'])->name('acara.index');
    Route::post('/acara/index', [AcaraController::class, 'acaraStore'])->name('acara.store');
    Route::get('/acara/{id}/jadwalkan', [AcaraController::class, 'toggleAcara'])->name('acara.jadwalkan');
    // Route::get('/acara/edit', [AcaraController::class, 'editIndex']);

    Route::get('/kategori-acara/index', [AcaraController::class, 'kategoriIndex']);
    Route::post('/kategori-acara/store', [AcaraController::class, 'kategoriStore']);

    Route::get('/acara/{id}/show', [AcaraController::class, 'acaraShow'])->name('acara.show');

    Route::get('/acara/teachers', [AcaraController::class, 'teachers'])->name('acara.teachers');
    Route::get('/acara/teacher/{id}', [AcaraController::class, 'teacherShow']);
});

Route::get('/acara/history', [AcaraController::class, 'history'])->name('acara.history');
Route::get('/saya_hadir', [AcaraController::class, 'hadir']);
Route::post('/saya_hadir', [AcaraController::class, 'hadirPost']);
Route::get('/tahsin', [AcaraController::class, 'tahsin'])->name('tahsin');
