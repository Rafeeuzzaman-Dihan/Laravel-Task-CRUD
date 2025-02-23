<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VFCA;
class VFCASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VFCA::factory()->count(50)->create();
    }
}
