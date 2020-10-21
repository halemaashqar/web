<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\product::class,10)->create();

        for ($i = 1; $i < 19; $i++) {
        \Illuminate\Support\Facades\DB::table('products')->insert(
            [
                'code' => $i,
                'Name' => 'Product' . $i,
                'vendor' => 'Product' . $i,
                'PdtDescription' => 'Product' . $i,
                'QtyInStock' => $i,
                'BuyPrice' => $i,
                'Scale' => $i,
                'MSRP' => 'Product' . $i

            ]
        );
    }
    }
}
