@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Carga Curso</h1>
				<form method="post" id="formulario_curso">
				{{ csrf_field() }}
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Nombre</label>
							<input type="text" name="nombre" class="form-control">
							<div id="mensaje_nombre"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Fecha Inicio</label>
							<input type="text" name="fecha_inicio" id="datepicker2" readonly="true" class="form-control">
							<div id="mensaje_fecha_inicio"></div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Fecha Finalizacion</label>
							<input type="text" name="fecha_finalizacion" id="datepicker3" readonly="true" class="form-control">
							<div id="mensaje_fecha_finalizacion"></div>
						</div>						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Profesor Titular</label>							
							<select name="profesor_titular" class="form-control">
								<option></option>
								@foreach($ptitular as $pt)
								<option value="{{ $pt->id }}">{{ $pt->apellido.', '.$pt->nombre }}</option>
								@endforeach
							</select>							
						</div>
					</div>	
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Profesor Adjunto</label>							
							<select name="profesor_adjunto" class="form-control">
								<option></option>
								@foreach($padjunto as $pa)
								<option value="{{ $pa->id }}">{{ $pa->apellido.', '.$pa->nombre }}</option>
								@endforeach
							</select>							
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Profesor Suplente</label>							
							<select name="profesor_suplente" class="form-control">
								<option></option>
								@foreach($psuplente as $ps)
								<option value="{{ $ps->id }}">{{ $ps->apellido.', '.$ps->nombre }}</option>
								@endforeach
							</select>							
						</div>
						<div id="mensaje_profesores"></div>						
					</div>				
					<input type="submit" value="Almacenar" class="btn btn-info">	
				</form>
				@if($mensaje) 
					 <div class="alert alert-danger text-center">{{$mensaje}}</div>
				@endif
			</section>
@endsection('content')