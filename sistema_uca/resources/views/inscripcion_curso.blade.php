@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Inscripcion Curso</h1>
				<form method="post" id="formulario_inscripcion_curso">
				{{ csrf_field() }}
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Curso</label>
							<select name="curso" class="form-control">
								<option></option>
								@foreach($cursos as $curso)
								<option value="{{ $curso->id }}">{{ $curso->nombre}}</option>
								@endforeach
							</select>
							<div id="mensaje_curso"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Alumno</label>
							<select name="alumno" class="form-control">
								<option></option>
								@foreach($alumnos as $alumno)
								<option value="{{ $alumno->id }}">{{ $alumno->apellido.', '.$alumno->nombre}}</option>
								@endforeach
							</select>
							<div id="mensaje_alumno"></div>
						</div>
					</div>					
					<input type="submit" value="Almacenar" class="btn btn-info">	
				</form>
				@if($mensaje) 
					 <div class="alert alert-danger text-center">{{$mensaje}}</div>
				@endif
			</section>
@endsection('content')