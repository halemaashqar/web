<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;


class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\customer::class,10)->create();
        for ($i=1; $i<19; $i++){
            \Illuminate\Support\Facades\DB::table('customers')->insert(
                [
                    'ID' => $i,
                    'Name' => 'Customers'.$i,
                    'LastName' => 'Customers'.$i,
                    'FirstName' => 'Customers'.$i,
                    'Phone' => 'Customers'.$i,
                    'Address1' => 'Customers'.$i,
                    'Address2' => 'Customers'.$i,
                    'State' => 'Customers'.$i,
                    'City' => 'Customers'.$i,
                    'PostalCode' => $i,
                    'Country' => 'Customers'.$i,
                    'CreaditLimit' => $i

                ]
            );

        }
    }
}
