<?php

namespace Database\Seeders;

use App\Models\Members;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Define the number of members you want to create
         $numberOfMembers = 10;

         // Create dummy members
         Members::factory()->count($numberOfMembers)->create();
    }
}
