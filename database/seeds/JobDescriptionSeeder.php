<?php

use Illuminate\Database\Seeder;

class JobDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employeerates')->insert(array(
            array(
                'JobDescription' => "Driver",
                'Rate' => "300",
                'Frequency' => "Monthly",
                'sss' => "450",
                'pagibig' => "500",
                
            ),
            array(
                'JobDescription' => "Helper",
                'Rate' => "300",
                'Frequency' => "Monthly",
                'sss' => "450",
                'pagibig' => "500",
            )
            ));
    }
}
