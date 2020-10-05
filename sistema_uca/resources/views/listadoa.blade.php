@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Listado de Alumnos</h1>				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>DNI</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						@foreach($alumnos as $alumno)
						<tr>
							<td>{{ $alumno->apellido }}</td>							
							<td>{{ $alumno->nombre }}</td>
							<td>{{ $alumno->dni }}</td>
							<td>
								
								<form method="post" action="{{ url('/eliminar_alumno', ['id'=>$alumno->id] )}}">
									<a href="{{ url('/editar_alumno', ['id'=>$alumno->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a>
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