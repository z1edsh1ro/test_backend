<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\P2p;

class P2pSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        P2p::factory(50)->create();
    }
}
