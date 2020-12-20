
<div class="container">
seccion para crear empleados
		<form action="{{url('/empleados')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
			{{ csrf_field()}}
		@include('empleados.form',['Modo'=>'Crear'])


</form>
</div>
