<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsolaSeeder extends Seeder
{
    public function run()
    {
        DB::table('consolas')->insert([
            'nombre' => 'Xbox',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consolas')->insert([
            'nombre' => 'Nintendo',
            'user_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consolas')->insert([
            'nombre' => 'PlayStation',
            'user_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
