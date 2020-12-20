@if(Session::has('Mensaje')){{Session::get('Mensaje')}}
@endif


<a href="{{url('compras/create')}}">Agregar Compras</a>
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

		<td>
			<a href="{{url('/compras/'.$compra->id.'/edit')}}">
				Editar
			</a>
			 |
			<form method="post" action="{{url('/compras/'.$compra->id)}}">
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
<p></p>
Clic<a href="{{route('compras.pdf')}}">
aqui
</a>
para descargar PDF de compras
</p>