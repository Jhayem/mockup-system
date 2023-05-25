<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeModel;
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
        DB::table('employees')->insert([
            
            ['name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'address' => '123 Main St, City',
            'department_id' => 1,],
            [
                'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '9876543210',
            'address' => '456 Second St, City',
            'department_id' => 2,
            ]
        ]);

    }
}
