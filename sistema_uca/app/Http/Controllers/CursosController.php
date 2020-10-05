<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Cursos;

class CursosController extends Controller
{   

    public function listado_curso(){
        $cursos=DB::table('cursos')->get();

        return view('listadoc',['cursos'=>$cursos]);
    }
    
    public function index()
    {
        //
    }
    
    public function create()
    {
        $ptitular=DB::table('profesores')->where('categoria', 'titular')->get();
        $padjunto=DB::table('profesores')->where('categoria', 'adjunto')->get();
        $psuplente=DB::table('profesores')->where('categoria', 'suplente')->get();
        $mensaje='';
        return view('carga_curso',['ptitular'=>$ptitular,'padjunto'=>$padjunto,'psuplente'=>$psuplente,'mensaje'=>$mensaje]);
    }
   
    public function store(Request $request)
    {
        $nombre=Request('nombre');
        $existe=DB::table('cursos')->where('nombre',$nombre)->first();
        if($existe){
            $mensaje='Ya existe el Curso';
            $ptitular=DB::table('profesores')->where('categoria', 'titular')->get();
            $padjunto=DB::table('profesores')->where('categoria', 'adjunto')->get();
            $psuplente=DB::table('profesores')->where('categoria', 'suplente')->get();
            return view('carga_curso',['ptitular'=>$ptitular,'padjunto'=>$padjunto,'psuplente'=>$psuplente,'mensaje'=>$mensaje]);
        }else{
            $curso=new Cursos();

            $curso->nombre=Request('nombre');
            $fecha_i=Request('fecha_inicio');
            $diai=substr($fecha_i,0,2);
            $mesi=substr($fecha_i,3,2);
            $anioi=substr($fecha_i,6,4);
            $fecha_inicio=$anioi.'-'.$mesi.'-'.$diai;
            $curso->fecha_inicio=$fecha_inicio;
            $fecha_f=Request('fecha_finalizacion');
            $diaf=substr($fecha_f,0,2);
            $mesf=substr($fecha_f,3,2);
            $aniof=substr($fecha_f,6,4);
            $fecha_finalizacion=$aniof.'-'.$mesf.'-'.$diaf;
            $curso->fecha_finalizacion=$fecha_finalizacion;            
            $curso->profesor_titular=Request('profesor_titular');
            $curso->profesor_adjunto=Request('profesor_adjunto');
            $curso->profesor_suplente=Request('profesor_suplente');

            $curso->save();

            return redirect('listadoc');
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $curso=DB::table('cursos')->where('id',$id)->first();
        $dia=substr($curso->fecha_inicio,8,2);
        $mes=substr($curso->fecha_inicio,5,2);
        $anio=substr($curso->fecha_inicio,0,4);
        $fecha_inicio=$dia.'/'.$mes.'/'.$anio;
        $curso->fecha_inicio=$fecha_inicio;

        $dia=substr($curso->fecha_finalizacion,8,2);
        $mes=substr($curso->fecha_finalizacion,5,2);
        $anio=substr($curso->fecha_finalizacion,0,4);
        $fecha_finalizacion=$dia.'/'.$mes.'/'.$anio;
        $curso->fecha_finalizacion=$fecha_finalizacion;

        $ptitular=DB::table('profesores')->where('categoria', 'titular')->get();
        $padjunto=DB::table('profesores')->where('categoria', 'adjunto')->get();
        $psuplente=DB::table('profesores')->where('categoria', 'suplente')->get();

        return view('editar_curso',['ptitular'=>$ptitular,'padjunto'=>$padjunto,'psuplente'=>$psuplente,'curso'=>$curso]);
    }
    
    public function update(Request $request, $id)
    {
        $curso = Cursos::findOrFail($id);

        $curso->nombre=Request('nombre');
        $fecha_i=Request('fecha_inicio');
        $diai=substr($fecha_i,0,2);
        $mesi=substr($fecha_i,3,2);
        $anioi=substr($fecha_i,6,4);
        $fecha_inicio=$anioi.'-'.$mesi.'-'.$diai;
        $curso->fecha_inicio=$fecha_inicio;
        $fecha_f=Request('fecha_finalizacion');
        $diaf=substr($fecha_f,0,2);
        $mesf=substr($fecha_f,3,2);
        $aniof=substr($fecha_f,6,4);
        $fecha_finalizacion=$aniof.'-'.$mesf.'-'.$diaf;
        $curso->fecha_finalizacion=$fecha_finalizacion;            
        $curso->profesor_titular=Request('profesor_titular');
        $curso->profesor_adjunto=Request('profesor_adjunto');
        $curso->profesor_suplente=Request('profesor_suplente');

        $curso->update();

        return redirect('listadoc');
    }
    
    public function destroy($id)
    {
        DB::table('cursos')->where('id', $id)->delete();        

        return redirect('listadoc');
    }
}
