<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
        	'name' => 'programacion',
        	'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit ex deleniti, sit cumque necessitatibus repellendus consequuntur optio illo ad. Accusamus veritatis, expedita nam rerum error pariatur magni ullam atque sapiente?"

        ]);

        Subject::create([
        	'name' => 'matematicas',
        	'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit ex deleniti, sit cumque necessitatibus repellendus consequuntur optio illo ad. Accusamus veritatis, expedita nam rerum error pariatur magni ullam atque sapiente?"

        ]);
    }
}
