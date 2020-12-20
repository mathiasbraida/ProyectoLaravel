seccion para editar Proveedores
<form action="{{url('/proveedores/'.$proveedor->id)}}"method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}

	@include('proveedores.form',['Modo'=>'Editar'])

</form>