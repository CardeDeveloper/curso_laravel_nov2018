<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
        	'student_id' => 1,
        	'subject_id' => 1,
        	'grade' => 10
        ]);

        Grade::create([
        	'student_id' => 1,
        	'subject_id' => 2,
        	'grade' => 9
        ]);
    }
}
