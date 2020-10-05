@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Editar Alumno</h1>
				<form method="post" id="formulario_editar_alumno">
				@method('PATCH')
				{{ csrf_field() }}
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Apellido</label>
							<input type="text" name="apellido" class="form-control" value="{{ $alumno->apellido}}">
							<div id="mensaje_apellido"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Nombre</label>
							<input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre}}">
							<div id="mensaje_nombre"></div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">DNI</label>
							<input type="text" name="dni" class="form-control" maxlength="8" value="{{ $alumno->dni}}">
							<div id="mensaje_dni"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Direccion</label>
							<input type="text" name="direccion" class="form-control" value="{{ $alumno->direccion}}">
							<div id="mensaje_direccion"></div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Pais</label>
							<input type="text" name="pais" class="form-control" value="{{ $alumno->pais}}">
							<div id="mensaje_pais"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Ciudad</label>
							<input type="text" name="ciudad" class="form-control" value="{{ $alumno->ciudad}}">
							<div id="mensaje_ciudad"></div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Localidad</label>
							<input type="text" name="localidad" class="form-control" value="{{ $alumno->localidad}}">
							<div id="mensaje_localidad"></div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Fecha Nacimiento</label>
							<input type="text" name="fecha_nacimiento" id="datepicker" readonly="true" class="form-control" value="{{ $alumno->fecha_nacimiento}}">
							<div id="mensaje_fecha_nacimiento"></div>
						</div>
					</div>
					<div class="form-row">						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<label class="texto_campo_formulario">Telefono</label>
							<input type="text" name="telefono" class="form-control" value="{{ $alumno->telefono}}">
							<div id="mensaje_telefono"></div>
						</div>
					</div>
					<input type="submit" value="Editar" class="btn btn-info">				
				</form>
			</section>
@endsection