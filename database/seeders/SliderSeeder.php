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
                    'photo' => './resources/img/activities/nri/nri-slider-1.png',
                    'activity_id' => 1,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/nri/nri-slider-2.png',
                    'activity_id' => 1,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/nri/nri-slider-3.png',
                    'activity_id' => 1,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Minecraft
                [
                    'photo' => './resources/img/activities/minecraft/minecraft-slider-1.png',
                    'activity_id' => 2,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/minecraft/minecraft-slider-2.png',
                    'activity_id' => 2,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/minecraft/minecraft-slider-3.png',
                    'activity_id' => 2,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Jackbox
                [
                    'photo' => './resources/img/activities/jackbox/jackbox-slider-1.png',
                    'activity_id' => 3,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/jackbox/jackbox-slider-2.png',
                    'activity_id' => 3,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/jackbox/jackbox-slider-3.png',
                    'activity_id' => 3,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Games
                [
                    'photo' => './resources/img/activities/game/game-slider-1.png',
                    'activity_id' => 4,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/game/game-slider-2.png',
                    'activity_id' => 4,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/game/game-slider-3.png',
                    'activity_id' => 4,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Board-games
                [
                    'photo' => './resources/img/activities/board-games/board-game-slider-1.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/board-games/board-game-slider-2.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/board-games/board-game-slider-3.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                // Other
                [
                    'photo' => './resources/img/activities/other/other-slider-1.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/other/other-slider-2.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
                [
                    'photo' => './resources/img/activities/other/other-slider-3.png',
                    'activity_id' => 5,
                    'created_at'=> now(),
                    'updated_at'=> now(),
                ],
            ]
        );
    }
}
