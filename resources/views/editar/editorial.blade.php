@laravelPWA

<style>

	@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');

	.containerReservas{
		
		margin-left: 20%;
		padding: 50px;
		width: 60%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		text-align: center;
		height: auto !important;
		background: white !important;
	
		
	}
	
	body{
		background-image: url("/img/headerlibros2.jpg") !important;
		font-family: 'Comfortaa', cursive !important;
	}
	
	.display-4{
		font-size: 2.5em !important;
	}
	
	.container1{
		
		width: 55%;
		height: auto;
		margin-left: 20% !important;
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
		position: left !important;
		margin-right: 90% !important;
	}
	
	
	.btnAtras:hover {
	  background-color: #2E2E2E !important;
	}
	
	i{
		margin-right: 10px;
	}
	
	.btn{
		background: #ff7125 !important;
		border: 0px !important;
	}
	
	
	@media (max-width: 750px){

		.containerReservas{
			margin-left: 0px !important;
			width: 100%;
			border-radius: 10px;
		}
		
		.container1{
			width: 95%;
			margin-left: 0px !important;
		}
		
	}
	
	

</style>

@extends('layouts.head')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<div class="containerReservas">


	<div class="container1">
		
	
		  <h1 class="display-4">Editar Editorial Nº {{$editorial->id_editorial}}</h1>
		  <hr class="bg-success">

			
			
			
		  <form method="post" action="{{ route('editoriales.update', $editorial->id_editorial) }}">
			   @csrf
              @method('PUT')
			<div class="row form-group">
				<label for="name" class="col-form-label col-md-4">  <i class="material-icons">perm_identity</i>Nombre</label>
				<div class="col-md-8">
				  <input type="text" name="nombre" id="name" class="form-control" required value='{{$editorial->nombre}}'>
				</div>
			  </div>
		  
			<div class="row form-group">
				<label for="name" class="col-form-label col-md-4"> <i class="material-icons">navigation</i>Direccion</label>
				<div class="col-md-8">
				  <input type="text" name="direccion" id="name" class="form-control" required value='{{$editorial->direccion}}'>
				</div>
			 </div>
			  
			  <div class="row form-group">
				<label for="name" class="col-form-label col-md-4"> <i class="material-icons">markunread</i>Código Postal</label>
				<div class="col-md-8">
				  <input type="text" name="cod_postal" id="name" class="form-control" required value='{{$editorial->cod_postal}}'>
				</div>
			  </div>
			  
			  
			   <div class="row form-group">
				<label for="name" class="col-form-label col-md-4"> <i class="material-icons">phone</i>Teléfono</label>
				<div class="col-md-8">
				  <input type="text" name="telefono" id="name" class="form-control" required value='{{$editorial->telefono}}'>
				</div>
			  </div>
			  
			     <div class="row form-group">
				<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person</i>Persona Encargada</label>
				<div class="col-md-8">
				  <input type="text" name="persona_encargada" id="name" class="form-control" required value='{{$editorial->persona_encargada}}'>
				</div>
			  </div>
			
			<div class="row form-group">
			  <label for="message" class="col-form-label col-md-4"> <i class="material-icons">mode_edit</i>   Observaciones</label>
			  <div class="col-md-8">
				<textarea name="observaciones" id="message" class="form-control" rows="3">{{$editorial->observaciones}}</textarea>
			  </div>
			</div>
			
			<div class="d-flex justify-content-center pt-3 mt-3">
			  <button type="submit" class="btn btn-info btn-block btn-send">Guardar</button>
			</div>
		  </form>
			
		</div>	
			
		<br>
	
<input type="button" class="btnAtras" onclick="history.back()" name="volver atrรกs" value="Cancelar">
</div>




@endsection


