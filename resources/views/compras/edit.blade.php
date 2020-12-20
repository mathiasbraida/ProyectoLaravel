seccion para editar compras
<form action="{{url('/compras/'.$compra->id)}}"method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}

	@include('compras.form',['Modo'=>'Editar'])

</form>