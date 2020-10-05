<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Alumnos;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('inicio');
    }

    public function listado_alumno(){
        
        $alumnos = DB::table('alumnos')->get();

        return view('listadoa',['alumnos' => $alumnos]);
    }    
    
    public function create()
    {        
        $mensaje='';
        return view('carga_alumno')->with('mensaje',$mensaje);
    }
    
    public function store(Request $request)
    {
        $dni=request('dni');
        $existe = DB::table('alumnos')->where('dni', $dni)->first();
        if($existe){
            $mensaje='Ya existe el alumno';
            return view('carga_alumno')->with('mensaje',$mensaje);
        }else{
            $alumnos=new Alumnos();
        
            $alumnos->apellido=request('apellido');
            $alumnos->nombre=request('nombre');
            $alumnos->dni=request('dni');
            $alumnos->direccion=request('direccion');
            $alumnos->pais=request('pais');
            $alumnos->ciudad=request('ciudad');
            $alumnos->localidad=request('localidad');
            $fecha=request('fecha_nacimiento');
            $dia=substr($fecha,0,2);
            $mes=substr($fecha,3,2);
            $anio=substr($fecha,6,4);
            $fecha_nacimiento=$anio.'-'.$mes.'-'.$dia;
            $alumnos->fecha_nacimiento=$fecha_nacimiento;
            $alumnos->telefono=request('telefono');
            
            $alumnos->save();

            return redirect('listadoa');    
        }
        
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {        
        $alumno=DB::table('alumnos')->where('id', $id)->first();

        $dia=substr($alumno->fecha_nacimiento,8,2);
        $mes=substr($alumno->fecha_nacimiento,5,2);
        $anio=substr($alumno->fecha_nacimiento,0,4);
        $fecha_nacimiento=$dia.'/'.$mes.'/'.$anio;

        $alumno->fecha_nacimiento=$fecha_nacimiento;

        return view('editar_alumno',['alumno'=>$alumno]);
    }
    
    public function update(Request $request, $id)
    {
        $alumno = Alumnos::findOrFail($id);

        $alumno->apellido=request('apellido');
        $alumno->nombre=request('nombre');
        $alumno->dni=request('dni');
        $alumno->direccion=request('direccion');
        $alumno->pais=request('pais');
        $alumno->ciudad=request('ciudad');
        $alumno->localidad=request('localidad');
        $fecha=request('fecha_nacimiento');
        $dia=substr($fecha,0,2);
        $mes=substr($fecha,3,2);
        $anio=substr($fecha,6,4);
        $fecha_nacimiento=$anio.'-'.$mes.'-'.$dia;
        $alumno->fecha_nacimiento=$fecha_nacimiento;
        $alumno->telefono=request('telefono');        

        $alumno->update();

        return redirect('listadoa');
    }
    
    public function destroy($id)
    {       

        DB::table('alumnos')->where('id', $id)->delete();

        //$alumno = Alumnos::findOrFail($id);

        //$alumno->destroy();

        return redirect('listadoa');
    }
}
