@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Listado de Profesores</h1>				
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
						@foreach($profesores as $profesor)
						<tr>
							<td>{{ $profesor->apellido }}</td>							
							<td>{{ $profesor->nombre }}</td>
							<td>{{ $profesor->dni }}</td>
							<td>
								
								<form method="post" action="{{ url('/eliminar_profesor', ['id'=>$profesor->id] )}}">
									<a href="{{ url('/editar_profesor', ['id'=>$profesor->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a>
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