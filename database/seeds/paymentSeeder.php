<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\payment::class,10)->create();

        for ($i = 1; $i < 19; $i++) {
            \Illuminate\Support\Facades\DB::table('payments')->insert(
                [

                    'PaymentDate' =>  'Y-m-d\TH:i:sP',
                    'CheckNum' => 'payment' . $i,
                    'Amount' =>  $i

                ]
            );
        }

    }
}
