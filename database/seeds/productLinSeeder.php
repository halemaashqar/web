<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productLinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\productLine::class,10)->create();

        for ($i = 1; $i < 19; $i++) {
            \Illuminate\Support\Facades\DB::table('product_lines')->insert(
                [
                    'Id' => $i,
                    'DescInText' => 'productLin' . $i,
                    'DescInHTML' => 'productLin' . $i,
                    'Image' => 'productLin' . $i

                ]
            );
        }
    }
}
