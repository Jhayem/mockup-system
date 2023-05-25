<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('_employee')->insert([
            [
                'name' => 'lol',
                'job_position' => 'janitor',
                'password' => '123456',
                'email' => 'paduajm@gmail.com',
            ]
            ]);
    }
}
