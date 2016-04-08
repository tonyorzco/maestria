<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

use App\Http\Requests;

class ejemploController extends Controller
{
    public function index(){
    	return view('ejemplo');
    }

    public function mostrarContacto(){
    	return view('contacto');
    }

    public function consultar(){
    	return view('consulta');
    }

    public function home(){
    	return view('home');
    }

    public function registro(){
    	return view('registro');
    }

    public function registra(Request $datos){
        $nombre=$datos->input('nombre');
        $edad=$datos->input('edad');
        $sexo=$datos->input('sexo');
        $carrera=$datos->input('carrera');

        $nuevo= new Alumno();
        $nuevo->nombre=$nombre;
        $nuevo->edad=$edad;
        $nuevo->carrera=$carrera;
        $nuevo->sexo=$sexo;
        $nuevo->save();

        return view('muestraRegistro', compact('Alumno'));
    }

    public function listaAlumnos()
    {
        $alumnos=Alumno::all();
        return view('muestraRegistro', compact('alumnos'));
    }

    public function eliminar($id)
    {
        $alumno=Alumno::find($id);
        $alumno->delete();

        $alumnos=Alumno::all();
        return view('muestraRegistro', compact('alumnos'));
    }

}
