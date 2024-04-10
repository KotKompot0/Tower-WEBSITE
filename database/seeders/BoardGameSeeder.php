<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('board_games')->insert([
            [
                'title' => '500 злобных карт',
                'description' => 'Нецензурная, саркастическая игра, где игроки создают шокирующие и смешные предложения, выбирая карты с различными фразами. Цель - вызвать смех и удивление среди друзей.',
                'photo' => './resources/img/games/evil-cards/evil-cards.png',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'title' => 'Алиас',
                'description' => 'Другая очень интересная игра про слова',
                'photo' => './resources/img/games/evil-cards/evil-cards.png',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
