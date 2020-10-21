<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\order::class,10)->create();

        for ($i =1; $i < 19; $i++) {
            \Illuminate\Support\Facades\DB::table('orders')->insert(
                array(
                    'ID' => $i,
                    'OtderData' =>'Y-m-d\TH:i:sP',
                    'RequiredDate' => 'Y-m-d\TH:i:sP',
                    'ShippedDate' => 'Y-m-d\TH:i:sP',
                    'Status' => $i,
                    'comments' => 'Order' . $i
                )
            );
        }
    }
}
