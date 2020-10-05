<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Inscripcion_cursos;

class InscripcionCursosController extends Controller
{    
    public function index()
    {
        //
    }

    public function listado_icursos(){        

        $inscriptos = DB::table('inscripcion_cursos')
            ->join('cursos', 'inscripcion_cursos.id_curso', '=', 'cursos.id')
            ->join('alumnos', 'inscripcion_cursos.id_alumno', '=', 'alumnos.id')
            ->select('inscripcion_cursos.*', 'cursos.nombre as curso', 'alumnos.apellido','alumnos.nombre')
            ->get();
        return view('listado_icursos',['inscriptos'=>$inscriptos]);
    }
    
    public function create()
    {
        $mensaje='';
        $cursos=DB::table('cursos')->get();
        $alumnos=DB::table('alumnos')->get();
        return view('inscripcion_curso',['cursos'=>$cursos,'alumnos'=>$alumnos,'mensaje'=>$mensaje]);
    }

    public function store(Request $request)
    { 
        $curso=Request('curso');
        $alumno=Request('alumno');
        $existe=DB::table('inscripcion_cursos')->where('id_curso','=',$curso)->where('id_alumno','=',$alumno)->first();    
        if($existe){
            $cursos=DB::table('cursos')->get();
            $alumnos=DB::table('alumnos')->get();
            $mensaje='Ya existe el alumno inscripto';
            return view('inscripcion_curso',['cursos'=>$cursos,'alumnos'=>$alumnos,'mensaje'=>$mensaje]);
        }else{
            $inscripcion=new Inscripcion_cursos;

            $inscripcion->id_curso=Request('curso');
            $inscripcion->id_alumno=Request('alumno');

            $inscripcion->save();

            return redirect('listado_icurso');    
        }
        
    }
   
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $cinscripto=DB::table('inscripcion_cursos')->where('id',$id)->first();
        $cursos=DB::table('cursos')->get();
        $alumnos=DB::table('alumnos')->get();
        $mensaje='';
        return view('editar_icurso',['cinscripto'=>$cinscripto,'cursos'=>$cursos,'alumnos'=>$alumnos,'mensaje'=>$mensaje]);
    }
    
    public function update(Request $request, $id)
    {
        
        $curso=Request('curso');
        $alumno=Request('alumno');
        $existe=DB::table('inscripcion_cursos')->where('id_curso','=',$curso)->where('id_alumno','=',$alumno)->first();    
        if($existe){
            $cursos=DB::table('cursos')->get();
            $alumnos=DB::table('alumnos')->get();
            $mensaje='Ya existe el alumno inscripto';
            $cinscripto=DB::table('inscripcion_cursos')->where('id',$id)->first();
            return view('editar_icurso',['cinscripto'=>$cinscripto,'cursos'=>$cursos,'alumnos'=>$alumnos,'mensaje'=>$mensaje]);
        }else{
            $icurso = Inscripcion_cursos::findOrFail($id);

            $icurso->id_curso=Request('curso');
            $icurso->id_alumno=Request('alumno');

            $icurso->update();

            return redirect('listado_icurso');    
        }
        
    }
   
    public function destroy($id)
    {
        DB::table('inscripcion_cursos')->where('id', $id)->delete();

        return redirect('listado_icurso')        ;
    }
}
