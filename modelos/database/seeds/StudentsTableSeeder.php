<?php

use Illuminate\Database\Seeder;
use App\student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
	    	student::create([
	            'name' => str_random(8),
	            'lastname' => str_random(12),
	            'birthday' => date("Y-m-d")
	            
	        ]);
    	}
    }
}
