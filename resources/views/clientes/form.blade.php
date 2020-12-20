{{ $Modo=='Crear'?'Agregar Cliente':'Modificar Cliente'}}

	<br/>

	<label for="Rut">{{'rut'}}</label>
	<input type="number" name="rut" id="rut" value="{{isset($cliente->rut)?$cliente->rut:''}}">
	<br/>

	<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="{{isset($cliente->Nombre)?$cliente->Nombre:''}}">
	<br/>

	<label for="Telefono">{{'Telefono'}}</label>
	<input type="number" name="Telefono" id="Telefono" value="{{isset($cliente->Telefono)?$cliente->Telefono:''}}">
	<br/>

	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="{{isset($cliente->Correo)?$cliente->Correo:''}}">
	<br/>

	<label for="direccion">{{'direccion'}}</label>
	<input type="text" name="direccion" id="direccion" value="{{isset($cliente->direccion)?$cliente->direccion:''}}">
	<br/>
	
	
	<br/>
	
	<input type="submit" value="{{ $Modo=='Crear'?'Agregar':'Modificar'}}">

	<a href="{{url('clientes')}}">Regresar</a>