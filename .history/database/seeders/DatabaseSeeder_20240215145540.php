<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@bazma',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'username' => 'siswa',
            'email' => 'admin@bazma',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
    }
}
