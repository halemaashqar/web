<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class orderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\orderProduct::class,10)->create();
        for ($i = 1; $i < 19; $i++) {
            \Illuminate\Support\Facades\DB::table('order_Products')->insert(
                [
                    'ID' => $i,
                    'Qty' => $i,
                    'PriceEach' => $i
                ]
            );
        }
    }
}
