<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activity_property')->insert([
            // NRI
            [
                'activity_id' => 1,
                'property_id' => 1,
                'value' => '4-8',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 1,
                'property_id' => 2,
                'value' => '3-8 ч.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 1,
                'property_id' => 3,
                'value' => 4,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 1,
                'property_id' => 4,
                'value' => 'ролевая игра',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 1,
                'property_id' => 5,
                'value' => 'Faundry, Discord, Roll20',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // Minecraft
            [
                'activity_id' => 2,
                'property_id' => 1,
                'value' => '1-1500',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 2,
                'property_id' => 2,
                'value' => '1-∞ ч.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 2,
                'property_id' => 3,
                'value' => 0,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 2,
                'property_id' => 4,
                'value' => 'песочница',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // Jackbox
            [
                'activity_id' => 3,
                'property_id' => 1,
                'value' => '2-10',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 3,
                'property_id' => 2,
                'value' => '1-2 ч.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 3,
                'property_id' => 3,
                'value' => 2,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 3,
                'property_id' => 4,
                'value' => 'ролевая игра',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 3,
                'property_id' => 5,
                'value' => 'ПК, телефон',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // Games
            [
                'activity_id' => 4,
                'property_id' => 1,
                'value' => '1-∞',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 4,
                'property_id' => 2,
                'value' => '1-∞ ч.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 4,
                'property_id' => 3,
                'value' => 1,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 4,
                'property_id' => 4,
                'value' => 'любые',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // Board-games
            [
                'activity_id' => 5,
                'property_id' => 1,
                'value' => '2-12',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 5,
                'property_id' => 2,
                'value' => '1-3 ч.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 5,
                'property_id' => 3,
                'value' => 2,
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 5,
                'property_id' => 4,
                'value' => 'любые',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 5,
                'property_id' => 5,
                'value' => 'Веб-сайты, Tabletop Simulator',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],

            // Other
            [
                'activity_id' => 6,
                'property_id' => 1,
                'value' => '2-∞',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 6,
                'property_id' => 2,
                'value' => '1-4 ч.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'activity_id' => 6,
                'property_id' => 5,
                'value' => 'Discord',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
