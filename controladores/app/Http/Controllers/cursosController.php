<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = [
            [
                "id" => 1,
                "nombre" => 'laravel',
                "descripcion" => 'Frameworks empresariales'
            ],
            [
                "id" => 2,
                "nombre" => 'Angular',
                "descripcion" => 'Frameworks Front end'
            ],
            [
                "id" => 3,
                "nombre" => 'Python',
                "descripcion" => 'Analisis de datos desde 0'
            ]

        ];

        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //lo que deberia tener
        
            return view('cursos.create');
      
        //return 'Esta es una vista para un form';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Se guardo con exito';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'es el recurso '. $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cursos.edit',compact('id'));
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
        return 'se actualizo con exito';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
