seccion para editar Productos
<form action="{{url('/insumos/'.$insumo->id)}}"method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}

	@include('insumos.form',['Modo'=>'Editar'])

</form>