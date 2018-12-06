<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Barryvdh\DomPDF\Facade as PDF;

class StudentsController extends Controller
{

    /*manage a mass assignment*/

    public function masiveAssignment(){
        
        $student=student::find(2);

        $student->grades()->createMany([
            [
                'subject_id' => 1,
                'student_id' => 2,
                'grade' => 10
            ],
            [
                'subject_id' => 2,
                'student_id' => 2,
                'grade' => 10
            ]
        ]);

        return $student->grades;
    }

    /**
    * Show PDF from the kardex
    **/

    public function kardexPDF($id){
        $grades=student::find($id)->grades;
        $pdf = PDF::loadView('students.grades', compact('grades'));
        //return $pdf->stream();
        return $pdf->download('kardex.pdf');
    }

    /**
    * Show grades by student
    **/
    public function grades($id){

        $grades=student::find($id)->grades;
        //return $grades[0]->subject;

        if(sizeof($grades)==0)
            return back()->withErrors(['No se encontraron calificaciones']);
        return view('students.grades')->with('grades',$grades);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return student::find(1)->grades;
        return view('students.index')->with('students', student::all()) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //esta es la forma de llamar un modelo para crear un nuevo registro
        $student = new student; //instancio un objeto del modelo

        //asumiendo que en request - recibo los mismo campos que hay en mi modelo
        $student->name = $request->name; //voy asignando sus valores desde request
        /*
        ...... los demas campos
        */

        //mando llamar el metodo save que automaticamente ejecutara el insert
        $student->save();

        return redirect('/students');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        return view('students.edit', compact($student) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->name = $request->name;
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/students');
    }
}
