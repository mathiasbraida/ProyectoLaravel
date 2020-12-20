seccion para editar clientes
<form action="{{url('/clientes/'.$cliente->id)}}"method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}

	@include('clientes.form',['Modo'=>'Editar'])

</form>