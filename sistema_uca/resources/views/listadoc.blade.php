@extends('principal')
@section('content')		
			<section>
				<h1 class="textos_secciones">Listado de Cursos</h1>				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Fecha Inicio</th>
							<th>Fecha Finalizacion</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cursos as $curso)
						<tr>
							<td>{{ $curso->nombre }}</td>							
							<td>{{ $curso->fecha_inicio }}</td>
							<td>{{ $curso->fecha_finalizacion }}</td>
							<td>
								
								<form method="post" action="{{ url('/eliminar_curso', ['id'=>$curso->id] )}}">
									<a href="{{ url('/editar_curso', ['id'=>$curso->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a>
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