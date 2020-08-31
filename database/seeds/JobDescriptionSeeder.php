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
                'JobDescription' => "Secretary",
                'Rate' => "25000",
                'Frequency' => "Monthly",
                'sss' => "450",
                'pagibig' => "500",
                
            ),
            array(
                'JobDescription' => "Dispatcher",
                'Rate' => "20000",
                'Frequency' => "Monthly",
                'sss' => "450",
                'pagibig' => "500",
            )
            ));
    }
}
