<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sexos')->insert([
            ['desc' => 'Masculino'],
            ['desc' => 'Feminino'],
        ]);
    }
}
