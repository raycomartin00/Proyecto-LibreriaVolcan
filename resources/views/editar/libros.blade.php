@laravelPWA

<style>

		@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');

	.containerReservas{
		
		margin-left: 20%;
		padding: 50px;
		width: 60%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		background: white !important;
		text-align: center;
		height: auto !important;
		background-repeat: no-repeat;
		 background-size: 100% 100%;
		
	}
	
	body{
		background-image: url("/img/headerlibros2.jpg") !important;
		font-family: 'Comfortaa', cursive !important;
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
	
	
		.display-4{
			font-size: 2.5em !important;
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
		
	
		  <h1 class="display-4">Editar Libro Nº {{$libro->id_libro}}</h1>
		  <hr class="bg-success">

			
			
			
		  <form method="post" action="{{ route('libros.update', $libro->id_libro) }}">
			   @csrf
              @method('PUT')
				<div class="row form-group">
					<label for="name" class="col-form-label col-md-4">  <i class="material-icons">perm_identity</i>Nombre</label>
					<div class="col-md-8">
					  <input type="text" name="nombre" id="name" class="form-control" required value='{{$libro->nombre}}'>
					</div>
				  </div>

				  <div class="row form-group">
					<label for="name" class="col-form-label col-md-4">  <i class="material-icons">perm_identity</i>ISBN</label>
					<div class="col-md-8">
					  <input type="text" name="isbn" id="name" class="form-control" required value='{{$libro->isbn}}'>
					</div>
				  </div>

				<div class="row form-group">
					<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person_pin</i> Editorial</label>
					<div class="col-md-8">
					  <input type="text" name="id_editorial" id="name" class="form-control" required value='{{$libro->id_editorial}}'>
					</div>
				  </div>

				  <div class="row form-group">
					<label for="name" class="col-form-label col-md-4"> <i class="material-icons">person_pin</i> Precio</label>
					<div class="col-md-8">
					  <input type="text" name="precio" id="name" class="form-control" required value='{{$libro->precio}}'>
					</div>
				  </div>

				<div class="row form-group">
				  <label for="message" class="col-form-label col-md-4"> <i class="material-icons">mode_edit</i>   Observaciones</label>
				  <div class="col-md-8">
					<textarea name="observaciones" id="message" class="form-control" rows="3">{{$libro->observaciones}}</textarea>
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


