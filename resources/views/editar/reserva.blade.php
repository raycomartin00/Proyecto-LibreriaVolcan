

<style>

		@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap');

		html, body{
		  font-family: 'Comfortaa', cursive !important;
		  padding:0px;
		  margin:0px;
		}
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
	
	.display-4{
		font-size: 2.5em !important;
	}
	
	

</style>

@extends('layouts.head')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<div class="containerReservas">


	<div class="container1">
		
	
		  <h1 class="display-4">Editar Reserva Nº {{$reserva->id_reserva}}</h1>
		  <hr class="bg-success">

			
			
			
		  <form method="post" action="{{ route('reservas.update', $reserva->id_reserva) }}">
			   @csrf
              @method('PUT')
			<div class="row form-group">
				<label for="name" class="col-form-label col-md-4">  <i class="material-icons">date_range</i>
Fecha de la Reserva</label>
				<div class="col-md-8">
				  <input type="date" name="fecha_reserva" id="name" class="form-control" required value='{{$reserva->fecha_reserva}}'>
				</div>
			  </div>
		  
			<div class="row form-group">
				<label for="name" class="col-form-label col-md-4"> <i class="material-icons">priority_high</i> Estado</label>
				<div class="col-md-8">
				  <input type="text" name="estado" id="name" class="form-control" required value='{{$reserva->estado}}'>
				</div>
			  </div>
			
			<div class="row form-group">
			  <label for="message" class="col-form-label col-md-4"> <i class="material-icons">question_answer</i>   Observaciones</label>
			  <div class="col-md-8">
				<textarea name="observaciones" id="message" class="form-control" rows="3">{{$reserva->observaciones}}</textarea>
			  </div>
			</div>
			
			<div class="d-flex justify-content-center pt-3 mt-3">
			  <button type="submit" class="btn btn-info btn-block btn-send">Guardar</button>
			</div>
		  </form>
			
		</div>	
			
		<br><br><br>
	
<input type="button" class="btnAtras" onclick="history.back()" name="volver atrรกs" value="Cancelar">
</div>




@endsection


