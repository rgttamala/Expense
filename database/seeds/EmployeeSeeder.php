<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

            DB::table('employees')->insert(array(
                array(
                    'FirstName' => "Rigie",
                    'MiddleName' => "Gallaza",
                    'LastName' => "Tamala",
                    'ContactNumber' => "09271331220",
                    'HomeAddress' => "Rosary Heights Cotabato City",
                    'CurrentAddress' => "Blk 78 lot 7 Tacunan Deca Homes Mintal DAvao City",
                    'Gender' => "Male",
                    'BirthDate' => "1993-11-13",
                    'Age' => "25",
                    'DateEmployed' => "2020-08-16",
                    'JobRates_id' => "2",
                ),
                array(
                    'FirstName' => "Shane",
                    'MiddleName' => "Tampipi",
                    'LastName' => "Largo",
                    'ContactNumber' => "09552342323",
                    'HomeAddress' => "Gem Village Maa Davao City",
                    'CurrentAddress' => "Blk 8 lot 45 nagka street Green Meadows Davao City",
                    'Gender' => "Female",
                    'BirthDate' => "1995-10-26",
                    'Age' => "23",
                    'DateEmployed' => "2020-08-16",
                    'JobRates_id' => "1",
                )
                ));

    }
}
