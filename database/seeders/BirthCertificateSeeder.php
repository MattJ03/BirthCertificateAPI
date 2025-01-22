<?php

namespace Database\Seeders;

use App\Models\BirthCertificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\BirthCertificateController;

class BirthCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BirthCertificate::factory()->count(20)->create();
    }
}
