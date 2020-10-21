<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\office::class,10)->create();

        for ($i = 1; $i < 19; $i++) {
            \Illuminate\Support\Facades\DB::table('Offices')->insert(
                [

                    'code' => $i,
                    'Phone' => 'Office' . $i,
                    'Address1' => 'Office1' . $i,
                    'Address2' => 'Office' . $i,
                    'State' => 'Office' . $i,
                    'City' => 'Office' . $i,
                    'PostalCode' => $i,
                    'Country' => 'Office' . $i,
                    'Territory' => 'Office' . $i

                ]
            );
        }
    }
}
