seccion para crear ventas
<form action="{{url('/ventas')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field()}}
	@include('ventas.form',['Modo'=>'Crear'])


</form>