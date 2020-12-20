{{ $Modo=='Crear'?'Agregar Producto':'Modificar Producto'}}

<br/>

	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="{{isset($insumo->Nombre)?$insumo->Nombre:''}}">
	<br/>

	<label for="Proveedor">{{'id_proveedor'}}</label>
		<select  name="id_proveedor" id="inputid_proveedor" class="form-control">
			<option value="">--elija el proveedor--</option>
			@foreach($proveedores as $proveedor)
			<option value="{{$proveedor['id']}}">{{$proveedor['Nombre']}}</option>


			@endforeach

		</select>
	<br/>


	<label for="Precio_compra">{{'Precio_compra'}}</label>
	<input type="number" name="Precio_compra" id="Precio_compra" value="{{isset($insumo->Precio_compra)?$insumo->Precio_compra:''}}">
	<br/>

	<label for="Precio_venta">{{'Precio_venta'}}</label>
	<input type="number" name="Precio_venta" id="Precio_venta" value="{{isset($insumo->Precio_venta)?$insumo->Precio_venta:''}}">
	<br/>

	<label for="Descripcion">{{'Descripcion'}}</label>
	<input type="text" name="Descripcion" id="Descripcion" value="{{isset($insumo->Descripcion)?$insumo->Descripcion:''}}">
	<br/>
	
	
	<br/>

	<input type="submit" value="{{ $Modo=='Crear'?'Agregar':'Modificar'}}">

	<a href="{{url('insumos')}}">Regresar</a>