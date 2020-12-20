@if(Session::has('Mensaje')){{Session::get('Mensaje')}}
@endif


<a href="{{url('clientes/create')}}">Agregar Cliente</a>
<table class="table thead-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>direccion</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($clientes as $cliente)
		<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$cliente->rut}}</td>
		<td>{{$cliente->Nombre}}</td>
		<td>{{$cliente->Telefono}}</td>
		<td>{{$cliente->Correo}}</td>
		<td>{{$cliente->direccion}}</td>
		<td>
			<a href="{{url('/clientes/'.$cliente->id.'/edit')}}">
				Editar
			</a>
			 |
			<form method="post" action="{{url('/clientes/'.$cliente->id)}}">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
			</form>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
<a href="{{url('')}}">Volver al menu Principal</a>