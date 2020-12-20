	{{ $Modo=='Crear'?'Agregar Empleado':'Modificar Empleado'}}

	<div class="form-group">
	<label for="Nombre" class="control-label">{{'Nombre'}}</label>
	<input type="text" class="form-control" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
	</div>

	<label for="Apellido">{{'Apellido'}}</label>
	<input type="text" name="Apellido" id="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}">
	<br/>

	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
	<br/>

	<label for="Foto">{{'Foto'}}</label>

	@if(isset($empleado->Foto))
		<br/>
		<img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
		<br/>
	@endif
	<input type="file" name="Foto" id="Foto" value="">
	<br/>
	
	<input type="submit" value="{{ $Modo=='Crear'?'Agregar':'Modificar'}}">

	<a href="{{url('empleados')}}">Regresar</a>