<?php

use Illuminate\Database\Seeder;

class CargoRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo_rates')->insert(array(
            array(
                'origin' => "Manila",
                'destination' => "Davao City",
                'route' => "Via Batangas",
                'trucktype' => "16wing",
                'cargoname' => "entrego",
                'rate' => "25000",
                
            ),
            array(
                'origin' => "Davao City",
                'destination' => "Manila",
                'route' => "Via Butuan",
                'trucktype' => "30wing",
                'cargoname' => "J&T",
                'rate' => "30000",
            )
            ));
    }
}
