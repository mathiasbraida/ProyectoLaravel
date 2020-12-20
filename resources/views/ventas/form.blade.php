{{ $Modo=='Crear'?'Agregar Venta':'Modificar Venta'}}

<br/>


	<label for="Cliente">{{'Cliente'}}</label>
		<select  name="id_cliente" id="inputid_cliente" class="form-control">
			<option value="">--elija el cliente--</option>
			@foreach($clientes as $cliente)
			<option value="{{$cliente['id']}}">{{$cliente['Nombre']}}</option>
			@endforeach
		</select>
	<br/>

	<label for="Proveedor">{{'Proveedor'}}</label>
		<select  name="id_proveedor" id="inputid_proveedor" class="form-control">
			<option value="">--elija el proveedor--</option>
			@foreach($proveedores ?? '' as $proveedor)
			<option value="{{$proveedor['id']}}">{{$proveedor['Nombre']}}</option>
			@endforeach
		</select>
	<br/>
	<label for="Insumo">{{'Insumo'}}</label>
		<select  name="id_insumo" id="inputid_insumo" class="form-control">
			<option value="">--elija el producto--</option>
			@foreach($insumos as $insumo)
			<option value="{{$insumo['id']}}">{{$insumo['Nombre']}}</option>
			@endforeach
		</select>
	<br/>
	
	<label for="Cantidad">{{'Cantidad'}}</label>
	<input type="number" name="Cantidad" id="Total" value="{{isset($compra->Cantidad)?$Compra->Cantidad:''}}">
	<br/>
	
	<br/>

	<input type="submit" value="{{ $Modo=='Crear'?'Agregar':'Modificar'}}">

	<a href="{{url('ventas')}}">Regresar</a>
