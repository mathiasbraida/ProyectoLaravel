{{ $Modo=='Crear'?'Agregar Compra':'Modificar Compra'}}

<br/>


	<label for="Empleado">{{'Empleado'}}</label>
		<select  name="id_empleado" id="inputid_empleado" class="form-control">
			<option value="">--elija el empleado--</option>
			@foreach($empleados as $empleado)
			<option value="{{$empleado['id']}}">{{$empleado['Nombre']}}</option>
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
			<option value="{{$insumo['id'], $proveedor['id_proveedor']}}">{{$insumo['Nombre']}}</option>
			@endforeach
		</select>
	<br/>
	
	<label for="Cantidad">{{'Cantidad'}}</label>
	<input type="number" name="Cantidad" id="Total" value="{{isset($compra->Cantidad)?$Compra->Cantidad:''}}">
	<br/>
	
	<br/>

	<input type="submit" value="{{ $Modo=='Crear'?'Agregar':'Modificar'}}">

	<a href="{{url('compras')}}">Regresar</a>