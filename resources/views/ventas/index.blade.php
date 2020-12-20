@if(Session::has('Mensaje')){{Session::get('Mensaje')}}
@endif


<a href="{{url('ventas/create')}}">Agregar Ventas</a>
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

		<td>
			<a href="{{url('/ventas/'.$venta->id.'/edit')}}">
				Editar
			</a>
			 |
			<form method="post" action="{{url('/ventas/'.$venta->id)}}">
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
<p>
Clic<a href="{{route('ventas.pdf')}}">
aqui
</a>
para descargar PDF de Ventas
</p>