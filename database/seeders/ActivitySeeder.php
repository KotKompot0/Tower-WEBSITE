<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//dynamic/nri-round.svg
//dynamic/minecraft-round.png
//dynamic/jackbox-round.png
//dynamic/game-round.png
//dynamic/board-game-round.png
//dynamic/other-round.png


        DB::table('activities')->insert([
            [
                'title' => 'НРИ',
                'admin_id' => 1,
                'description' => json_encode([
                    [
                        'title' => 'Что такое НРИ?',
                        'content' => 'В НРИ , то есть в “настольной ролевой игре” участники принимают роли персонажей в вымышленном мире, расследуют загадки, выполняют задания и развивают своих персонажей. Каждый игрок описывает действия своего персонажа, а правила определяют результаты этих действий. Но кто контролирует игроков и рассказывает историю? Этим ключевым человеком является мастер игры или же GameMater. Именно раскрасчик задает тон повествования и ставит перед игроками различные интересные задачи и проблемы.',
                    ],
                    [
                        'title' => 'Системы НРИ',
                        'content' => ['Dungeons & Dragons (D&D)', 'Киберпанк 2020/2077', 'Pathfinder', 'Авторские'],
                    ]
                ]),
                'photo_preview' => 'dynamic/nri-preview.jpg',
                'photo_round' => 'dynamic/nri-round.svg',
                'icon' => 'dynamic/i-nri.svg',
                'slug' => 'nri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Minecraft',
                'admin_id' => null,
                'description' => json_encode([
                    [
                        'title' => 'Что такое Minecraft?',
                        'content' => 'Minecraft - это популярная компьютерная игра в жанре песочницы, созданная компанией Mojang Studios. В этой увлекательной игре игроки исследуют бескрайний мир, добывают ресурсы, строят разнообразные структуры и сражаются с монстрами. Майнкрафт впечатляет своей безграничной свободой и креативностью, позволяя создавать уникальные миры и приключения. Графика в игре пиксельная, что добавляет особый шарм, а музыкальное сопровождение создает атмосферу загадочности и вдохновения. Minecraft завоевал миллионы поклонников по всему миру и продолжает вдохновлять новых игроков на бескрайние возможности творчества.',
                    ],
                    [
                        'title' => 'Популярные сервера',
                        'content' => ['Hypixel', 'Crystalix', '2b2t', 'Mineland'],
                    ]
                ]),
                'photo_preview' => 'dynamic//minecraft-preview.png',
                'photo_round' => 'dynamic/minecraft-round.png',
                'icon' => 'dynamic/i-minecraft.svg',
                'slug' => 'minecraft',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Jackbox',
                'admin_id' => null,
                'description' => json_encode([
                    [
                        'title' => 'Что такое Jackbox?',
                        'content' => 'В Jackbox Games - это коллекция многопользовательских видеоигр, где игроки используют смартфоны или планшеты в качестве контроллеров. Они участвуют в веселых и интерактивных играх, включая викторины, аркады и творческие конкурсы, вместе с друзьями или семьей.',
                    ],
                ]),
                'photo_preview' => 'dynamic/jackbox-preview.png',
                'photo_round' => 'dynamic/jackbox-round.png',
                'icon' => 'dynamic/i-jackbox.svg',
                'slug' => 'jackbox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Игры',
                'admin_id' => null,
                'description' => json_encode([
                    [
                        'title' => 'Давайте поговорим о захватывающем мире компьютерных игр!',
                        'content' => 'Игры не только предоставляют увлекательное развлечение, но и способствуют развитию навыков, таких как стратегическое мышление, сотрудничество и решение задач. От многопользовательских онлайн-игр до захватывающих одиночных приключений, существует игра для каждого. Будьте частью активного и дружелюбного сообщества геймеров, где вы можете соревноваться и обмениваться опытом. Приглашаем вас погрузиться в увлекательный мир игр и насладиться бесконечными приключениями!',
                    ],
                ]),
                'photo_preview' => 'dynamic/game-preview.png',
                'photo_round' => 'dynamic/game-round.png',
                'icon' => 'dynamic/i-games.svg',
                'slug' => 'games',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Настолки',
                'admin_id' => null,
                'description' => json_encode([
                    [
                        'title' => 'Погрузимся в мир настолок!',
                        'content' => 'Как ни странно, но в “настольные” игры вполне можно играть не только на столе, но и с помощью веб-браузера! На нашем сервере вы найдете множество увлекательных игр, которые помогут скрасить ваш вечер, отдохнуть от суеты и мирских забот в уютной компании. Игры включают в себя широкий спектр жанров и механик, таких как стратегия, карточные игры, настольные ролевые игры и многое другое. Некоторые из них для 2-4 человек, а другие для большой компании, поэтому каждый найдет что-то себе по душе!'
                    ],
                    [
                        'title' => 'Какие игры проходят?',
                        'content' => ['Имаджинариум', 'Алиса', '500 злобных карт', 'Бэнг!', 'Бункер', 'Коднеймс', 'Гартик', 'Намек понял'],
                    ],
                ]),
                'photo_preview' => 'dynamic/board-game-preview.png',
                'photo_round' => 'dynamic/board-game-round.png',
                'icon' => 'dynamic/i-board-games.svg',
                'slug' => 'board-games',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Прочее',
                'admin_id' => null,
                'description' => json_encode([
                    [
                        'title' => 'Какие еще бывают ивенты?',
                        'content' => 'Помимо основных ивентов у нас также проводятся необычные мероприятия, такие как Дискуссии, МузИвент, СиГейм, Чтение и многое другое! Дискуссии. У каждого иногда возникают вопросы и темы, которые хотелось бы обсудить и найти истину. В этом вам поможет дискуссионный клуб, где любители порассуждать обязательно увлекут вас беседами! МузИвент. Все любят слушать музыку, но куда веселее послушать живое исполнение либо же самому продемонстрировать свои музыкальные навыки на МузИвенте! СиГейм. Проверьте собственные знания в различных областях в интеллектуальной увлекательной викторине под названием «Своя игра», для нее вам потребуется лишь браузер. Чтение. Запасайтесь чаем, укутывайтесь в пледик и вперед в литературный клуб, где вы сможете насладиться историями книг в исполнении наших чтецов!',
                    ],
                ]),
                'photo_preview' => 'dynamic/other-preview.png',
                'photo_round' => 'dynamic/other-round.png',
                'icon' => 'dynamic/i-other.svg',
                'slug' => 'other',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
//        Activity::factory(2)->create();
    }
}
