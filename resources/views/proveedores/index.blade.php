@if(Session::has('Mensaje')){{Session::get('Mensaje')}}
@endif


<a href="{{url('proveedores/create')}}">Agregar Proveedor</a>
<table class="table thead-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>rut</th>
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>direccion</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($proveedores as $proveedor)
		<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$proveedor->rut}}</td>
		<td>{{$proveedor->Nombre}}</td>
		<td>{{$proveedor->Telefono}}</td>
		<td>{{$proveedor->Correo}}</td>
		<td>{{$proveedor->direccion}}</td>
		<td>
			<a href="{{url('/proveedores/'.$proveedor->id.'/edit')}}">
				Editar
			</a>
			 |
			<form method="post" action="{{url('/proveedores/'.$proveedor->id)}}">
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