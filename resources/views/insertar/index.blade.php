@laravelPWA

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
	
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
	
	
	

</style>

@extends('layouts.head')

@section('content')

<div id="sidebar" style="top:initial;right:initial;" class='menu'>
  <ul id="nav-container">
	  
	  <br><br> <br><br>
    <li class="sidebar-list"><a href="/home"><img src="https://segurosncs.com/wp-content/uploads/2017/12/hogar-slide-blanco.png" width="30" height="30"/><br>Inicio</a></li>
    
	 <li class="sidebar-list"><a href="/insertar"><img src="https://e1.pngegg.com/pngimages/1019/842/png-clipart-light-dock-icons-folder-folder-icon.png"  width="40" height="40" /><br>Insertar</a></li> 
	  
    <li class="sidebar-list"><a href="/chart"><img src="https://plataformaanticorrupcion.pe/wp-content/uploads/2017/07/estadistica_blanco-1.png"  width="50" height="50"/><br>Estadisticas</a></li>
    
    <li class="sidebar-list"><a href="/pdf"><img src="https://www.avanzadi.com/wp-content/uploads/2019/06/03_icono-inventario.png"  width="40" height="40" /><br>Inventario</a></li>
    
   
  </ul>
</div>



<div class="containerInsertar">
	
<div class="insertLibro">
	
	
	<div class="encabezado"> <b>INSERTAR NUEVO LIBRO</b>
		


			<form method="POST" action="{{url('/insertarLibro')}}">			  
					  @csrf

				<br>
				<div class="input-field">
							<i class="material-icons prefix">perm_identity</i>
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" size="50" required>
				</div>
				<br>
				<div class="input-field">
							<i class="material-icons prefix">person_pin</i>
							<label for="id_editorial">Editorial</label>
							<input type="number" name="id_editorial" required>
				</div>
				<br>
				<div class="input-field">
							<i class="material-icons prefix">mode_edit</i>
							<label for="observaciones">Observaciones</label>
							<textarea name="observaciones" rows="10" class="materialize-textarea"  length="140" required></textarea>
				</div>

					@csrf
				<br><br><br><br><br><br><br><br>
				<p class="center-align">
				  <button type="submit" class="btn btn-dark">Guardar Libro</button>
				</p>
			</form>

	</div>	
	
</div>
	
	
<div class="insertEditorial">

	<div class="encabezado"> <b>INSERTAR NUEVA EDITORIAL</b>
		


			<form method="POST" action="{{url('/insertarEditorial')}}">			  
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
@endsection

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>