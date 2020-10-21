<?php


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\Database\Seeders\officeSeeder::class);
        $this->call(\Database\Seeders\employeeSeeder::class);
        $this->call(\Database\Seeders\orderSeeder::class);
        $this->call(\Database\Seeders\paymentSeeder::class);
        $this->call(\Database\Seeders\productLinSeeder::class);
        $this->call(\Database\Seeders\productSeeder::class);
        $this->call(\Database\Seeders\orderProductSeeder::class);
        $this->call(\Database\Seeders\customerSeeder::class);



    }
}
