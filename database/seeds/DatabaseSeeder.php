<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Rigie Tamala",
            'email' => 'rgttamala@gmail.com',
            'password' => bcrypt('SolidGround13'),
            ]);

            $this->call([EmployeeSeeder::class]);
            $this->call([CargoRatesSeeder::class]);
            $this->call([JobDescriptionSeeder::class]);
          
            
    }
    
    
    
}
