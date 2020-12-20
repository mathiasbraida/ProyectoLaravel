<table class="table thead-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Foto</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
		</tr>
	</thead>
	<tbody>
		@foreach($empleados as $empleado)
		<tr>
		<td>{{$loop->iteration}}</td>
		<td>
			<img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
		</td>
		<td>{{$empleado->Nombre}}</td>
		<td>{{$empleado->Apellido}}</td>
		<td>{{$empleado->Correo}}</td>
	
		</tr>
		@endforeach
	</tbody>
</table>