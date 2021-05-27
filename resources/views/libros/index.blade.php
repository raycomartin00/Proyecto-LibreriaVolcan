
@laravelPWA
<style>
		@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');

	body{
		background-image: url("/img/headerlibros2.jpg");
	}
	
	
	.containerReservas{
		background: white;
		margin-left: 5%;
		padding: 20px;
		width: 90%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		
	}
	
	
	
	
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
	  width: 1200px; 	  
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
	.insertLibro{
		background: white;
		width: 45%;
		height: 700px;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		background: white !important;
		padding: 20px;
		display: inline-block;
		 vertical-align: top;
	}
	
	.insertEditorial{
		background: white;
		width: 45%;
		height: 700px;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		background: white !important;
		padding: 20px;
		display: inline-block;
		margin-left: 5%;
		
	}
	

	.h3 {
	  font-family: "aclonica";
	  font-size; 120px;
	  color: orange;
	}
	
	.encabezado{
		height: 40px;
		background: #FCAD2C;
		width: 100%;
		padding: .75rem 1.25rem;
		margin-bottom: 2% !important;
		border-radius: 20px;
		
	}
	
	
	.containerInsertar{
		background: white;
		margin-left: 2%;
        width: 95%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
        height: auto;
		padding: 100px;
	}
	
	.btn {
	  width: auto !important;
	  background-color: #ff7125 !important;
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

	.btn:hover {
	  background-color: #FCAD2C !important;
	}
	
	
	.modal{
		overflow-y: hidden !important;
		margin-top: 5% !important;
		width: 500px !important;
		padding-right: 0px !important; 
		padding-bottom: 0px !important;
		left: 30% !important;
		
	}
	
	.modal-content{
		padding: 50px !important;
	}
	
	@media (min-width: 576px){
		.modal-dialog {
			max-width: none !important;
			margin: 0 !important;
		}
    /* max-width: 500px; */
    /* margin: 1.75rem auto; */
	}
	
	.btnAtras{
	  width: 120px !important;
	  background-color: #000 !important;
	  border: none !important;
	  outline: none !important;
	  height: 49px !important;
	  border-radius: 49px !important;
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
	
	.boton{
		outline: none !important;
		background: #F98080 !important;
		border: 0px !important;
		border-radius: 3px !important;
	}
	
	.botonEdit{
		outline: none !important;
		background: #CBE9FA !important;
		border: 0px !important;
		border-radius: 3px !important;
		color: black !important;
		height: 50px !important;
		padding-top: 10px;
		padding-left: 3px;
		padding-right: 3px;
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

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.js"></script>




<div class="containerReservas">
                    
	 <div class="card-header">
    LIBROS DISPONIBLES
     </div>
	
	<br>				
				<table id='example' class="table table-striped table-bordered nowrap" style="width:100%">
						
						
					<thead>
						<tr>


							<th>id</th>
							<th>ISBN</th>
							<th>Nombre</th>
							<th>Observaciones</th>
							<th>Editorial</th>
							<th>Precio</th>
							<th>Acciones</th>

						</tr>
					</thead>
					<tbody>

						@foreach($libross as $l)
						  <tr>

							<td style="vertical-align:middle;">{{$l->id_libro}}</td> 
							<td style="vertical-align:middle;">{{$l->isbn}}</td>
							<td style="vertical-align:middle;">{{$l->nombre}}</td>

							<td style="vertical-align:middle;">{{$l->observaciones}}</td>

							<td style="vertical-align:middle;">{{$l->Editorial->nombre}}</td>
							 <td style="vertical-align:middle;">{{$l->precio}}</td> 
							  <td style="vertical-align:middle;">
							  
							<form action="{{ route('libros.destroy', $l->id_libro)}}" method="post" style="display: inline-block">
								@csrf
								@method('DELETE')
								<button  type="submit" class="boton"><i class="material-icons">delete_forever</i></button>
							 </form>
							<a  class="botonEdit" href="{{ route('libros.edit', $l->id_libro)}}" title="Editar Libro"><i class="material-icons">edit</i></a>
							  
							  
							  </td>

						  </tr>

						@endforeach
					</tbody>
						

				</table>
	
	<br>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	   Crear Nuevo Libro
	</button>
	<br><br>
	

	
	
	

</div>








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INSERTAR LIBRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
  
			
		<form method="POST" action="{{ route('libros.store')}}">			  
				  @csrf

			<br>
			<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nombre</label><br>
						<input type="text" name="nombre" size="35" required>
			</div>
			<br>
			<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="id_editorial">Editorial</label><br>
						<input type="number" name="id_editorial"  required>
			</div>
			<br>
			<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="isbn">ISBN</label><br>
						<input type="text" name="isbn"  required>
			</div>
			<br>
			<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="precio">Precio</label><br>
						<input type="number" name="precio"  required>
			</div>
			<br>
			
			<br>
			<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="observaciones">Observaciones</label><br>
						<textarea name="observaciones" rows="3" cols="40" class="materialize-textarea"   length="140" required></textarea>
			</div>

				@csrf
			<br><br>
			<p class="center-align" align="center">
			  <button type="submit" class="btn btn-dark">Guardar Libro</button>
			</p>
		</form>
	  
		  
      


    </div>
  </div>
</div>



<script>
$(document).ready( function () {
	$('#example').DataTable({
		responsive: true,
		"order": [[ 0, '' ], [ 1, '' ], [ 2, '' ], [ 3, 'desc' ]],
		"lengthMenu": [[6, 10, 25, -1], [6, 10, 25, "All"]],
		"language": {
		  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
		},
		 "stripeClasses": [],
		
	});

} );
</script>


@endsection