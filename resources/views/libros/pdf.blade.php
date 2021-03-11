<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



<div class="title m-b-md">
   {!!QrCode::size(300)->generate("www.nigmacode.com") !!}
</div>


<table class='table table-bordered table-striped'>

	@foreach($libros as $l)
	  <tr>

		<td>{{$l->id_libro}}</td> 

		<td>{{$l->nombre}}</td>

		<td>{{$l->observaciones}}</td>

		<td>{{$l->Editorial->nombre}}</td>

	  </tr>

	@endforeach

</table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>