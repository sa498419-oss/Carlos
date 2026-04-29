<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VjuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $vjuegos = [
            [
                'titulo' => 'L4D2',
                'consola' => 'PC',
                'esrb' => 'T',
                'user_id' => 1
            ],
            [
                'titulo' => 'Minecraft',
                'consola' => 'Xbox',
                'esrb' => 'E',
                'user_id' => 2
            ],
            [
                'titulo' => 'Skyrim',
                'consola' => 'PlayStation',
                'esrb' => 'M',
                'user_id' => 3
            ],
            [
                'titulo' => 'Wii Sports',
                'consola' => 'Nintendo Wii',
                'esrb' => 'E',
                'user_id' => 1
            ],
            [
                'titulo' => 'Super Mario Bros',
                'consola' => 'Nintendo',
                'esrb' => 'E',
                'user_id' => 2
            ],
            [
                'titulo' => 'Call of Duty',
                'consola' => 'PC',
                'esrb' => 'T',
                'user_id' => 3
            ],
            [
                'titulo' => 'Diablo III',
                'consola' => 'PC',
                'esrb' => 'T',
                'user_id' => 1
            ],
            [
                'titulo' => 'FIFA 18',
                'consola' => 'Xbox',
                'esrb' => 'E',
                'user_id' => 2
            ],
            [
                'titulo' => 'Gears of War',
                'consola' => 'Xbox',
                'esrb' => 'T',
                'user_id' => 1
            ],
        ];
        foreach ($vjuegos as $vjuego) {
            DB::table('vjuegos')->insert(array_merge($vjuego, ['created_at' =>
            now()]));
        }
    }
}
