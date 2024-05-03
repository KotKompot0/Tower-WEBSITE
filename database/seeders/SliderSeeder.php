<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert(
            [
                // NRI
                [
                    'photo' => 'dynamic/nri-slider-1.png',
                    'activity_id' => 1,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/nri-slider-2.png',
                    'activity_id' => 1,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/nri-slider-3.png',
                    'activity_id' => 1,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Minecraft
                [
                    'photo' => 'dynamic/minecraft-slider-1.png',
                    'activity_id' => 2,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/minecraft-slider-2.png',
                    'activity_id' => 2,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/minecraft-slider-3.png',
                    'activity_id' => 2,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Jackbox
                [
                    'photo' => 'dynamic/jackbox-slider-1.png',
                    'activity_id' => 3,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/jackbox-slider-2.png',
                    'activity_id' => 3,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/jackbox-slider-3.png',
                    'activity_id' => 3,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Games
                [
                    'photo' => 'dynamic/game-slider-1.png',
                    'activity_id' => 4,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/game-slider-2.png',
                    'activity_id' => 4,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/game-slider-3.png',
                    'activity_id' => 4,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Board-games
                [
                    'photo' => 'dynamic/board-game-slider-1.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/board-game-slider-2.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/board-game-slider-3.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Other
                [
                    'photo' => 'dynamic/other-slider-1.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/other-slider-2.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => 'dynamic/other-slider-3.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
            ]
        );
    }
}
