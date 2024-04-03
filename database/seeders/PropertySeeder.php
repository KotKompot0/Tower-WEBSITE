<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'name' => 'Число игроков',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Время партии',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Порог вхождения',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Жанр',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Способ проведения',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
