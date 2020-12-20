seccion para editar ventas
<form action="{{url('/ventas/'.$venta->id)}}"method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}

	@include('ventas.form',['Modo'=>'Editar'])

</form>