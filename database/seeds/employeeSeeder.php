<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Emmployee::class,10)->create();

        for ($i = 1; $i < 19; $i++) {
            \Illuminate\Support\Facades\DB::table('emmployees')->insert(
                [
                    'ID' => $i,
                    'LastName' => 'Employee' . $i,
                    'FirstName' => 'Employee' . $i,
                    'Extension' => 'Employee' . $i,
                    'Email' => 'Employee' . $i,
                    'reportsTo' => $i,
                    'JobTitle' => 'Employee' . $i

                ]
            );
        }
    }
}
