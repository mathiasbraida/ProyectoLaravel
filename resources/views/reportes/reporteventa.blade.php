<table class="table thead-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Cliente</th>
			<th>Proveedor</th>
			<th>Producto</th>
			<th>Cantidad</th>

		</tr>
	</thead>
	<tbody>
		@foreach($ventas as $venta)
		<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$venta->id_cliente}}</td>
		<td>{{$venta->id_proveedor}}</td>
		<td>{{$venta->id_insumo}}</td>
		<td>{{$venta->cantidad}}</td>

	
		</tr>
		@endforeach
	</tbody>
</table>