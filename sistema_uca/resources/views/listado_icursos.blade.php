@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Alumnos Inscriptos</h1>				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Curso</th>
							<th>Alumno</th>							
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						@foreach($inscriptos as $inscripto)
						<tr>
							<td>{{ $inscripto->curso }}</td>							
							<td>{{ $inscripto->apellido.', '.$inscripto->nombre }}</td>
							<td>
								
								<form method="post" action="{{ url('/eliminar_icurso', ['id'=>$inscripto->id] )}}">
									<a href="{{ url('/editar_icurso', ['id'=>$inscripto->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a>
									@method('DELETE')
									{{ csrf_field() }}
									<button type="submit" class="btn btn-danger">Eliminar</button>	
								</form>								
							</td>	
						</tr>
						@endforeach
					</tbody>
				</table>
			</section>
@endsection('content')