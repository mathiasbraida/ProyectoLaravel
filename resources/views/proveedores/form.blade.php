{{ $Modo=='Crear'?'Agregar Proveedor':'Modificar Proveedor'}}

	<br/>

	<label for="Rut">{{'rut'}}</label>
	<input type="number" name="rut" id="rut" value="{{isset($proveedor->rut)?$proveedor->rut:''}}">
	<br/>

	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="{{isset($proveedor->Nombre)?$proveedor->Nombre:''}}">
	<br/>

	<label for="Telefono">{{'Telefono'}}</label>
	<input type="number" name="Telefono" id="Telefono" value="{{isset($proveedor->Telefono)?$proveedor->Telefono:''}}">
	<br/>

	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="{{isset($proveedor->Correo)?$proveedor->Correo:''}}">
	<br/>

	<label for="direccion">{{'direccion'}}</label>
	<input type="text" name="direccion" id="direccion" value="{{isset($proveedor->direccion)?$proveedor->direccion:''}}">
	<br/>
	
	
	<br/>
	
	<input type="submit" value="{{ $Modo=='Crear'?'Agregar':'Modificar'}}">

	<a href="{{url('proveedores')}}">Regresar</a>