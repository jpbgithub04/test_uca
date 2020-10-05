@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Editar Curso Inscripto</h1>
				<form method="post" id="formulario_editar_inscripcion_curso">
				@method('PATCH')
				{{ csrf_field() }}
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Curso</label>
							<select name="curso" class="form-control">
								<option></option>
								@foreach($cursos as $curso)
								@if($curso->id==$cinscripto->id_curso)
								<option value="{{ $curso->id }}" selected="">{{ $curso->nombre}}</option>
								@else
								<option value="{{ $curso->id }}">{{ $curso->nombre}}</option>
								@endif								
								@endforeach
							</select>
							<div id="mensaje_curso"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Alumno</label>
							<select name="alumno" class="form-control">
								<option></option>
								@foreach($alumnos as $alumno)
								@if($alumno->id==$cinscripto->id_alumno)
								<option value="{{ $alumno->id }}" selected="">{{ $alumno->apellido.', '.$alumno->nombre}}</option>
								@else
								<option value="{{ $alumno->id }}">{{ $alumno->apellido.', '.$alumno->nombre}}</option>
								@endif
								@endforeach
							</select>
							<div id="mensaje_alumno"></div>
						</div>
					</div>					
					<input type="submit" value="Editar" class="btn btn-info">	
				</form>
				@if($mensaje) 
					 <div class="alert alert-danger text-center">{{$mensaje}}</div>
				@endif
			</section>
@endsection('content')