<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            ['name' => 'leonardo', 'email' => 'leonardo@correo.com', 'password' =>
            Hash::make('leonardo')],
            ['name' => 'sebastian', 'email' => 'sebastian@correo.com', 'password' =>
            Hash::make('sebastian')],
            ['name' => 'mauricio', 'email' => 'mauricio@correo.com', 'password' =>
            Hash::make('mauricio')],
        ];
        foreach ($users as $user) {
            DB::table('users')->insert(array_merge($user, ['created_at' => now()]));
        }
    }
}
