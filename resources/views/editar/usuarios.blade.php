

<style>

	
	.containerReservas{
		
		margin-left: 20%;
		padding: 50px;
		width: 60%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		text-align: center;
		height: auto !important;
		background: white !important;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		
	}
	
	body{
		background-image: url("/img/headerlibros2.jpg") !important;
	}
	
	.container1{
		
		width: 55%;
		height: 400px;
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
	
	

</style>

@extends('layouts.head')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<div class="containerReservas">


	<div class="container1">
		
	
		  <h1 class="display-4">Editar Usuario Nº {{$user->id}}</h1>
		  <hr class="bg-success">

			
			
			
		  <form method="post" action="{{ route('usuarios.update', $user->id) }}">
			   @csrf
              @method('PUT')
				<div class="row form-group">
					<label for="name" class="col-form-label col-md-4">  <i class="material-icons">perm_identity</i>Nombre</label>
					<div class="col-md-8">
					  <input type="text" name="name" id="name" class="form-control" required value='{{$user->name}}'>
					</div>
				  </div>

				  <div class="row form-group">
					<label for="name" class="col-form-label col-md-4">  <i class="material-icons">perm_identity</i>Apellidos</label>
					<div class="col-md-8">
					  <input type="text" name="apellidos" id="name" class="form-control" required value='{{$user->apellidos}}'>
					</div>
				  </div>

				<div class="row form-group">
					<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person_pin</i>DNI</label>
					<div class="col-md-8">
					  <input type="text" name="dni" id="name" class="form-control" required value='{{$user->dni}}'>
					</div>
				  </div>

				  <div class="row form-group">
					<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person_pin</i>Telefono</label>
					<div class="col-md-8">
					  <input type="text" name="telefono" id="name" class="form-control" required value='{{$user->telefono}}'>
					</div>
				  </div>
			  
			    <div class="row form-group">
					<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person_pin</i>Direccion</label>
					<div class="col-md-8">
					  <input type="text" name="direccion" id="name" class="form-control" required value='{{$user->direccion}}'>
					</div>
				  </div>
			  
			    <div class="row form-group">
					<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person_pin</i>Email</label>
					<div class="col-md-8">
					  <input type="text" name="email" id="name" class="form-control" required value='{{$user->email}}'>
					</div>
				  </div>

				
			
			<div class="d-flex justify-content-center pt-3 mt-3">
			  <button type="submit" class="btn btn-info btn-block btn-send">Guardar</button>
			</div>
		  </form>
			
		</div>	
			
		<br><br><br><br><br>
	
<input type="button" class="btnAtras" onclick="history.back()" name="volver atrรกs" value="Cancelar">
</div>




@endsection


