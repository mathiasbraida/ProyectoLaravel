<table class="table thead-light">
	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Empleado</th>
			<th>Proveedor</th>
			<th>Producto</th>
			<th>Cantidad</th>

		</tr>
	</thead>
	<tbody>
		@foreach($compras as $compra)
		<tr>
		<td>{{$loop->iteration}}</td>
		
		<td>{{$compra->id_empleado}}</td>
		<td>{{$compra->id_proveedor}}</td>
		<td>{{$compra->id_insumo}}</td>
		<td>{{$compra->cantidad}}</td>

		</tr>
		@endforeach
	</tbody>
	
</table>