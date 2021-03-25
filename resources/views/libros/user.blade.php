<style type="text/css">
  
	input[type="checkbox"] {
    position: relative;
    width: 40px;
    height: 20px;
    -webkit-appearance: none;
    background: #c6c6c6;
    border-radius: 100px;
    outline: none;
    box-shadow: inset 0 0 5px rgba(0,0,0,.2);
    transition: .5s;
}
input:checked[type="checkbox"] {
    background: #03a9f4;
}
input[type="checkbox"]::before {
    content: '';
    position: absolute;
    width: 50%;
    height: 100%;
    top: 0;
    left: 0;
    background: white;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0,0,0,.2);
    transform: scale(1.1);
    transition: .5s;
}
input:checked[type="checkbox"]::before {
    left: 50%;
}
	
	body{
		background-image: url("/img/headerlibros2.jpg") !important;
		background-repeat: no-repeat;
	}
	
	
	.containerLibros{
		background: white;
		margin-left: 5%;
		padding: 20px;
		width: 90%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
	}
	
	.btn {
	  width: auto !important;
	  background-color: #686868 !important;
	  border: none !important;
	  outline: none !important;
	  height: 10px !important;
	  border-radius: 49px !important;
	  color: #fff !important;
	  text-transform: uppercase !important;
	  font-weight: 600 !important;
	  margin: 10px 0 !important; 
	  cursor: pointer !important;
	  transition: 0.5s !important;
	}

	.btn:hover {
	  background-color: #FCAD2C !important;
	}
	
	
		.btnAtras{
	  width: 120px !important;
	  background-color: #686868 !important;
	  border: none !important;
	  outline: none !important;
	  height: 49px !important;
	  border-radius: 10px !important;
	  color: #fff !important;
	  text-transform: uppercase !important;
	  font-weight: 600 !important;
	  margin: 10px 0 !important; 
	  cursor: pointer !important;
	  transition: 0.5s !important;
	}
	
	.btnAtras:hover {
	  background-color: #2E2E2E !important;
	}
</style>

@extends('layouts.head2')

@section('content')

<!-- Datatable responsive (añadir estos dos cdn, la clase en table y responsive en script) -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.js"></script>


<div class="containerLibros">

			<table class="table table-striped table-bordered nowrap" style="width:100%" id='example'>
				<thead>
					<tr>

						<th>Id Libro</th>
						<th>ISBN</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Editorial</th>
						<th>Imagen</th>
					</tr>
				</thead>
				<tbody>
					@foreach($libros as $l)
					  <tr>

						<td>{{$l->libro->id_libro}}</td>
						<td>{{$l->libro->isbn}}</td>
						<td>{{$l->libro->nombre}}</td>
						<td>{{$l->libro->precio}} Euros</td>	
						<td>{{$l->libro->Editorial->nombre}}</td>
						  
						  <td><img src='{{$l->libro->imagen}}' width="70" height="70"></td>

					  </tr>

					@endforeach
				</tbody>

			</table>
	
	<input type="button" class="btnAtras" onclick="history.back()" name="volver atrรกs" value="Cancelar">
</div>
      




  <script>
$(document).ready( function () {
	$('#example').DataTable({
		responsive: true,
		"order": [[ 0, "desc" ]],
		"lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
		"language": {
		  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
		}
	});
} );
</script>
@endsection