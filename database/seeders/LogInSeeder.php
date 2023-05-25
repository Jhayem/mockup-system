<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LogInSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('_log_in')->insert([
            [
                'name' => 'lol',
                'password' => '123456',
                'email' => 'paduajm@gmail.com',
            ]
            ]);
    }
}
