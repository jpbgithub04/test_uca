<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profesores;

class ProfesoresController extends Controller
{    
    public function index()
    {
        //
    }

    public function listado_profesores(){

        $profesores = DB::table('profesores')->get();

        return view('listadop',['profesores'=>$profesores]);
    }
    
    public function create()
    {
        $mensaje='';
        return view('carga_profesor')->with('mensaje',$mensaje);
    }
    
    public function store(Request $request)
    {
        $dni=request('dni');
        $existe = DB::table('profesores')->where('dni', $dni)->first();
        if($existe){
            $mensaje='Ya existe el profesor';
            return view('carga_profesor')->with('mensaje',$mensaje);
        }else{
            $profesor=new Profesores();
        
            $profesor->apellido=request('apellido');
            $profesor->nombre=request('nombre');
            $profesor->dni=request('dni');
            $profesor->direccion=request('direccion');
            $profesor->pais=request('pais');
            $profesor->ciudad=request('ciudad');
            $profesor->localidad=request('localidad');
            $fecha=request('fecha_nacimiento');
            $dia=substr($fecha,0,2);
            $mes=substr($fecha,3,2);
            $anio=substr($fecha,6,4);
            $fecha_nacimiento=$anio.'-'.$mes.'-'.$dia;
            $profesor->fecha_nacimiento=$fecha_nacimiento;
            $profesor->telefono=request('telefono');
            $profesor->categoria=request('categoria');
            
            $profesor->save();

            return redirect('listadop');    
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $profesor=DB::table('profesores')->where('id', $id)->first();

        $dia=substr($profesor->fecha_nacimiento,8,2);
        $mes=substr($profesor->fecha_nacimiento,5,2);
        $anio=substr($profesor->fecha_nacimiento,0,4);
        $fecha_nacimiento=$dia.'/'.$mes.'/'.$anio;

        $profesor->fecha_nacimiento=$fecha_nacimiento;

        return view('editar_profesor',['profesor'=>$profesor]);
    }
    
    public function update(Request $request, $id)
    {
        $profesor = Profesores::findOrFail($id);

        $profesor->apellido=request('apellido');
        $profesor->nombre=request('nombre');
        $profesor->dni=request('dni');
        $profesor->direccion=request('direccion');
        $profesor->pais=request('pais');
        $profesor->ciudad=request('ciudad');
        $profesor->localidad=request('localidad');
        $fecha=request('fecha_nacimiento');
        $dia=substr($fecha,0,2);
        $mes=substr($fecha,3,2);
        $anio=substr($fecha,6,4);
        $fecha_nacimiento=$anio.'-'.$mes.'-'.$dia;
        $profesor->fecha_nacimiento=$fecha_nacimiento;
        $profesor->telefono=request('telefono');
        $profesor->categoria=request('categoria');

        $profesor->update();

        return redirect('listadop');
    }
    
    public function destroy($id)
    {
        DB::table('profesores')->where('id', $id)->delete();

        return redirect('listadop');
    }
}
