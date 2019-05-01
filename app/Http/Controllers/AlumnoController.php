<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $alumnos = Alumno::all();

        return view('alumnos.index', compact('alumnos'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function main()
    {
        return view('alumnos.main');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'nocontrol'=>'required',
            'semestre'=>'required|integer'
        ]);
        $alumno = new Alumno([
            'nombre' => $request->get('nombre'),
            'nocontrol' => $request->get('nocontrol'),
            'semestre' => $request->get('semestre')
        ]);
        $alumno->save();
        return redirect('/alumnos')->with('success', 'Alumno agregado exitosamente');
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
        $alumno = Alumno::find($id);

        return view('alumnos.edit', compact('alumno'));
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
        $request->validate([
            'nombre'=>'required',
            'nocontrol'=> 'required',
            'semestre' => 'required|integer'
          ]);

          $alumno = Alumno::find($id);
          $alumno->nombre = $request->get('nombre');
          $alumno->nocontrol = $request->get('nocontrol');
          $alumno->semestre = $request->get('semestre');
          $alumno->save();

          return redirect('/alumnos')->with('success', 'Información editada correctamente');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        return redirect('/alumnos')->with('success', 'Registro eliminado correctamente');
    }


    public function inicio()
    {
        return view('ejemplo.inicio');
    }

    public function perfil()
    {
        return view('ejemplo.perfil');
    }

    public function portafolio()
    {
        return view('ejemplo.portafolio');
    }

    public function contacto()
    {
        return view('ejemplo.contacto');
    }
}
