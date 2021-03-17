<style>

	body{
		background-image: url("/img/headerlibros2.jpg");
	}
	
	
	.containerReservas{
		background: white;
		margin-left: 10%;
		padding: 20px;
		width: 85%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
	}
	
	
	
	
		html, body{
  font-family: 'Overpass', sans-serif;
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
		margin-left: 10%;
        width: 85%;
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
	
	
	
</style>

@extends('layouts.head')

@section('content')

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<div id="sidebar" style="top:initial;right:initial;" class='menu'>
  <ul id="nav-container">
	  
	  <br><br> <br><br>
    <li class="sidebar-list"><a href="/home"><img src="https://segurosncs.com/wp-content/uploads/2017/12/hogar-slide-blanco.png" width="30" height="30"/><br>Inicio</a></li>
    
	 <li class="sidebar-list"><a href="/insertar"><img src="https://e1.pngegg.com/pngimages/1019/842/png-clipart-light-dock-icons-folder-folder-icon.png"  width="40" height="40" /><br>Insertar</a></li> 
	  
    <li class="sidebar-list"><a href="/chart"><img src="https://plataformaanticorrupcion.pe/wp-content/uploads/2017/07/estadistica_blanco-1.png"  width="50" height="50"/><br>Estadisticas</a></li>
    
    <li class="sidebar-list"><a href="/pdf"><img src="https://www.avanzadi.com/wp-content/uploads/2019/06/03_icono-inventario.png"  width="40" height="40" /><br>Inventario</a></li>
	  
	<li class="sidebar-list"><a href="/libros"><br>Libros</a></li>
    
   
  </ul>
</div>

<div class="containerReservas">
                    
					
				<table id='example' class="table">
						
						
					<thead>
						<tr>


							<th>id</th>
							<th>Nombre</th>
							<th>Direccion</th>
							<th>Códifo Postal</th>
							<th>Teléfono</th>
							<th>Persona Encargada</th>
							<th>Observaciones</th>
							<th>Acciones</th>
							

						</tr>
					</thead>
					<tbody>

						@foreach($editorial as $e)
						  <tr>

							<td style="vertical-align:middle;">{{$e->id_editorial}}</td> 

							<td style="vertical-align:middle;">{{$e->nombre}}</td>

							<td style="vertical-align:middle;">{{$e->direccion}}</td>

							<td style="vertical-align:middle;">{{$e->cod_postal}}</td>
							  
							<td style="vertical-align:middle;">{{$e->telefono}}</td>
							  
							 <td style="vertical-align:middle;">{{$e->persona_encargada}}</td>
							  
							 <td style="vertical-align:middle;">{{$e->observaciones}}</td>
							  
							  <td style="vertical-align:middle;">
							  
							<form action="{{ route('editoriales.destroy', $e->id_editorial)}}" method="post" style="display: inline-block">
								@csrf
								@method('DELETE')
								<button  type="submit" class="boton"><i class="material-icons">delete_forever</i></button>
							 </form>
							  
							  
							  </td>

						  </tr>

						@endforeach
					</tbody>
						

				</table>
	
	<br>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	   Crear Nueva Editorial
	</button>
	<br><br>
	
	<input type="button" class="btnAtras" onclick="history.back()" name="volver atrรกs" value="Cancelar">
	
	
	

</div>








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INSERTAR EDITORIAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
  
			
		<form method="POST" action="{{ route('editoriales.store')}}">			  
					  @csrf

				
				<div class="input-field">
							<i class="material-icons prefix">perm_identity</i>
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" size="50" required>
				</div>
				
				<div class="input-field">
							<i class="material-icons prefix">navigation</i>
							<label for="direccion">Direcciรณn</label>
							<input type="text" name="direccion" required>
				</div>
				
				<div class="input-field">
							<i class="material-icons prefix">markunread</i>
							<label for="cod_postal">Cรณdigo Postal</label>
							<input type="number" name="cod_postal" required>
				</div>
				
				<div class="input-field">
							<i class="material-icons prefix">phone</i>
							<label for="telefono">Telefono</label>
							<input type="number" name="telefono" required>
				</div>
				
				<div class="input-field">
							<i class="material-icons prefix">person</i>
							<label for="persona_encargada">Persona Encargada</label>
							<input type="text" name="persona_encargada" required>
				</div>
				
				<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<label for="observaciones">Observaciones</label>
							<textarea name="observaciones" rows="10" class="materialize-textarea"  length="140" required></textarea>
				</div>

					@csrf
				<br>
				<p class="center-align">
				  <button type="submit" class="btn btn-dark">Guardar Editorial</button>
				</p>
			</form>
	  
		  
      


    </div>
  </div>
</div>



<script>
$(document).ready( function () {
	$('#example').DataTable({
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