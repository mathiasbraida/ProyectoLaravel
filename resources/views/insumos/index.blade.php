@if(Session::has('Mensaje')){{Session::get('Mensaje')}}
@endif


<a href="{{url('insumos/create')}}">Agregar Producto</a>
<table class="table thead-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Proveedor</th>
			<th>Precio_compra</th>
			<th>Precio_venta</th>
			<th>Descripcion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($insumos as $insumo)
		<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$insumo->Nombre}}</td>
		<td>{{$insumo->id_proveedor}}</td>
		<td>{{$insumo->Precio_compra}}</td>
		<td>{{$insumo->Precio_venta}}</td>
		<td>{{$insumo->Descripcion}}</td>
		<td>
			<a href="{{url('/insumos/'.$insumo->id.'/edit')}}">
				Editar
			</a>
			 |
			<form method="post" action="{{url('/insumos/'.$insumo->id)}}">
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