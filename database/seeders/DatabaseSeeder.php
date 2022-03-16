<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
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
        Teacher::factory(10)->create();
    }
}
