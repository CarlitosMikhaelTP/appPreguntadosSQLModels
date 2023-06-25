<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();

        return view('prueba.index', compact('alumnos'));
    }

    public function show(Alumno $alumnos)
    {
        return view('prueba.show', compact('alumnos'));
    }

    public function create()
    {
        return view('prueba.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);

        Alumno::create($data);

        return redirect()->route('prueba.index')->with('success', 'Item created successfully.');
    }

    

    public function missingMethod($parameters=array())
    {
        abort(404);
    }
}
