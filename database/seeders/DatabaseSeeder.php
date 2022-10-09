<?php

namespace Database\Seeders;

use App\Models\Acara;
use App\Models\Student;
use App\Models\Teacher;
use Database\Factories\AcaraTeacherFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(DatabaseSettingSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(DocumentTypeSeeder::class);
        $this->call(ExtracurricularCategorySeeder::class);
        $this->call(TempStudentSeeder::class);
        $this->call(TempClassSeeder::class);
        $this->call(PresenceSettingSeeder::class);
        Teacher::factory(10)->create();
        $this->call(KategoriAcaraSeeder::class);
        Acara::factory(5)->create();
    }
}
