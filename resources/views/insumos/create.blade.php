seccion para crear Productos
<form action="{{url('/insumos')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field()}}
	@include('insumos.form',['Modo'=>'Crear'])


</form>