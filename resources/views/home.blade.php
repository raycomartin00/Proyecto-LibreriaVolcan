
@laravelPWA

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');
	
	html, body{
 font-family: 'Comfortaa', cursive !important;
  padding:0px;
  margin:0px;
}#sidebar-container{
  visibility:hidden;
  opacity: 0;
  transition: all .25s;
}
#sidebar{
  user-select:none;
}

#sidebar-container{
  visibility:visible;
  opacity: 1;
}
#sidebar-container img {
  max-width:36px;
}

#sidebar{
  position: fixed;
  left: 0;
  height: 2000px; /*100vh */
  background: #1C2020;
}
#sidebar ul{
  padding:0px;
  margin:0px;
  list-style:none;
}

#sidebar ul li {
  font-size:16px;
  transition: all 0.25s;
  width:120px;
  /*height:120px;*/
	height:128px; /*20vh*/
  background: #1C2020;
  display:flex;
  text-align:center;
}
#sidebar ul li:hover {
  background:#FCAD2C;
	/* background:#2f2f2f; */
}
#sidebar ul li *{
  text-decoration:none;
  color:white;
  margin:auto;
}
@media (max-height: 768px) {
	li.sidebar-list {
		max-height:153px;
	}
}
@media (max-height: 736px) {
	li.sidebar-list {
		max-height:147px;
	}
}
@media (max-height: 690px) {
	li.sidebar-list {
		max-height:138px;
	}
}
@media (max-height: 667px) {
	li.sidebar-list {
		max-height:133px;
	}
}
@media (max-height: 640px) {
	li.sidebar-list {
		max-height:128px;
	}
}
@media (max-height: 600px) {
	li.sidebar-list {
		max-height:120px;
	}
}
@media (max-height: 598px) {
	li.sidebar-list {
		max-height:119px;
	}
}
@media (max-height: 568px) {
	li.sidebar-list {
		max-height:113px;
	}
}
@media (max-height: 533px) {
	li.sidebar-list {
		max-height:100px;
	}
}
@media (max-height: 504px) {
	li.sidebar-list {
		max-height:94px;
	}
}
@media (max-height: 480px) {
	li.sidebar-list {
		max-height:82px;
	}
}
@media (max-height: 428px) {
	li.sidebar-list {
		max-height:65px;
	}
}
@media (max-height: 346px) {
	li.sidebar-list {
		max-height:55px;
	}
}

	
  .card-body, .card, .col-md-8, .container, .row, .justify-content-center
	{   
	  width: 100% !important; 	  
	}

	button{
		width: 70%;
		height: 80px;
		
	}
	
	tr{
		text-align: center;
	}
	
	.div-button{
		margin-left: 20%;
		margin-top: 30px;
	}
	.row{
		margin-top: 0px;
		margin-left: -100px;
		
	}
	
	.menu{
		margin-top: -150px;
	}
	
	body{
		background-image: url("/img/headerlibros3.jpg");
		background-size: 100% 100%;
	}
	
	.card-header{
		background: white !important;
	}
	
	.card{
		border: 1px solid white !important;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		background: white !important;
		
	}
	
	.containerReservas{
		background: white;
		margin-left: 5%;
		padding: 20px;
		width: 90%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
	}
	
	
	
	.high-light{
		background: #FFA5A5 !important;
	}
	
	.amarillo{
		background: #FFD36F !important;
	}
	
	.verde{
		background: #D1F7D5 !important;
	}
	
	
	.ClienteLibros{
		
		margin-right: 40%;
		text-decoration: none;
	}
	
	a i{
		text-decoration: none;
		color: black !important;
		display: relative;
		
	}
	
	.iconosTabla{
		margin-right: 20px;
	}
	
	#blanco{
		color: white !important;
	}
	
	.boton{
		height: 30px !important;
		width: 40px !important;
		outline: none !important;
 		text-decoration: none !important;
		border: 0px !important;
		 background-color: Transparent !important;
	}
	
	


	.nuevo{
		background: red !important;
	}
	
	.navbar-nav{
		margin-top: 10px !important;
	}
	
	.navbar-light .navbar-toggler{
		margin: auto !important;
		height: auto !important;
		margin-top: 20px !important;
	}
	
	.navbar-light .navbar-toggler{
		margin-top: 20px !important;
	}
	
	
	

</style>

@extends('layouts.head')

@section('content')
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.js"></script>




<!--
<div class='utils'>
	
	<div class="card-header">{{ __('UTILIDADES') }}</div>
	
	<div class='div-button'>
		<button class="btn btn-primary" onclick="window.location.href='/pdf'">INVENTARIO PDF</button>
	</div>
	<div class='div-button'>
		<button class="btn btn-primary" onclick="window.location.href='/qrcode'">QR</button>
	</div>
	
	
</div>
-->

<div class="containerReservas">
	
 <div class="card-header">
    RESERVAS DE LIBROS 2020/2021
  </div>
	
	<br>
	
<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




                    <table id='example' class="table table-striped table-bordered nowrap" style="width:100%">
						<thead>
							<tr>
								
								
								<th>Fecha De La Reserva</th>
								<th>Datos Del Cliente Y Reserva</th>
								<th>Estado</th>
								<th>Reserva</th>
								<th>Acciones</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($reservas as $r)
							 
								@if($r->estado =='Pendiente')     
									<tr class="high-light">

								@elseif($r->estado =='Avisado')
									<tr class="amarillo">
										
								@elseif($r->estado =='Recogido')
									<tr class="verde">		
								@else

								@endif
								
								<td style="vertical-align:middle;"><i class="material-icons iconosTabla">date_range</i>{{$r->fecha_reserva}}</td>
								  
								<td style="vertical-align:middle;">
									<a href="{{url('/reservas')}}/{{$r->id_users}}" title="Ver Cliente"><i class="material-icons ClienteLibros">person</i></a>
									<a href="{{route('LibroUsuario', $r->id_reserva)}}" title="Ver Libros"><i class="material-icons">library_books</i></a>
								</td>
								  
								<td style="vertical-align:middle;">{{$r->estado}}</td>       
								
								  
								 <td style="vertical-align:middle;">{{$r->id_reserva}}</td>
										
								<td>
									<form action="{{ route('reservas.destroy', $r->id_reserva)}}" method="post" style="display: inline-block">
										@csrf
										@method('DELETE')
										<button  type="submit" class="boton" title="Eliminar Reserva"><i class="material-icons">delete_forever</i></button>
									 </form>
									<a href="{{ route('reservas.edit', $r->id_reserva)}}" title="Editar Reserva"><i class="material-icons">edit</i></a>
								</td>

							  </tr>
									
							@endforeach
						</tbody>
					</table>
	

	
	

	
	
	
	
	
	

</div>










<script>
	
	
$(".boton").click(function() {
	
	alert("hola");
  
});	
	
	
	
	
	
	
$(document).ready( function () {
	$('#example').DataTable({
		responsive: true,
		"order": [[ 0, '' ], [ 1, '' ], [ 2, '' ], [ 3, 'desc' ]],
		"lengthMenu": [[9, 25, 50, -1], [9, 25, 50, "All"]],
		"language": {
		  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
		},
		 "stripeClasses": [],
		
	});
} );

	
$(document).ready(function() {
			toastr.options = {
			
				'positionClass': 'toast-top-right',
				
				'showDuration': '4000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '4000',
				
			}
		});	
	
	
	
$('.boton').click(function(event) {
			toastr.options = {
			
				'positionClass': 'toast-top-right',
				
				'showDuration': '4000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '4000',
				
			}
			toastr.error('La reserva se ha eliminado');
});
	
	
	

</script>






@endsection


