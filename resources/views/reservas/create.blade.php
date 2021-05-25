@laravelPWA


<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

<meta name="viewport" content="width=device-width"/>




<style type="text/css">
  
	input[type="checkbox"] {
    position: relative;
    width: 50px;
    height: 20px;
    -webkit-appearance: none;
    background: #c6c6c6;
    border-radius: 100px;
    outline: none;
    box-shadow: inset 0 0 5px rgba(0,0,0,.2);
    transition: .5s;
}
input:checked[type="checkbox"] {
    background: #FCAD2C;
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
	
	 .cards tbody tr {
            float: left;
            width: 19rem;
            margin: 0.5rem;
            border: 0.0625rem solid rgba(0,0,0,.125);
    	    border-radius: .25rem;
            box-shadow: 0.25rem 0.25rem 0.5rem rgba(0,0,0,0.25);
        }
        .cards tbody td {
            display: block;
        }
        .table tbody label {
            display: none;
        }
        .cards tbody label {
        	display: inline;
        	position: relative;
        	font-size: 85%;
        	top: -0.5rem;
        	float: left;
        	color: #808080;
        	min-width: 4rem;
        	margin-left: 0;
        	margin-right: 1rem;
        	text-align: left;
        }
        tr.selected label {
            color: #404040;
        }
        
        .table .fa {
            font-size: 2.5rem;
            text-align: center;
        }
        .cards .fa {
            font-size: 7.5rem;
        }
	
	.table td .table th {
		border-top: 0px solid !important;
	}
	
	.table-bordered td {
		border: 0px solid !important;
	}
	
	tr{
		text-align: center;
		
	}
	
	table.dataTable tbody tr{
		margin-left: 3% !important;
		margin-top: 1%;
	}
	
	@media (max-width: 570px) {
 		 .cards tbody tr {
           float: none;
            width: 16rem;
            margin: 0.5rem;
            border: 0.0625rem solid rgba(0,0,0,.125);
    	    border-radius: .25rem;
            box-shadow: 0.25rem 0.25rem 0.5rem rgba(0,0,0,0.25);
        }
	}
	
	.btnCancelar {
		  width: auto !important;
		  background-color: #686868 !important;
		  border: none !important;
		  outline: none !important;
		  height: 50px !important;
		  border-radius: 10px !important;
		  color: #fff !important;
		  text-transform: uppercase !important;
		  font-weight: 600 !important;
		  margin: 10px 0 !important;
		  cursor: pointer !important;
		  transition: 0.5s !important;
	}
	
	


	
	
</style>

@extends('layouts.head2')


@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.css"/> 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/r-2.2.7/datatables.min.js"></script>


<div class="containerLibros">
	
 <div class="card-header">
    RESERVAS DE LIBROS 2020/2021
  </div>
	
	<br>
                    
				<form method='POST' action="{{route('reservas.store')}}">
					
					@csrf
					<table class="table table-bordered " style="width:100%"  id='example'>

						
							
						
						<thead>
							<tr>

								<th>Selecciona</th>
								<th>ISBN</th>
								<th>Nombre</th>
								<th>Precio</th>
								<th>Imagen</th>
							</tr>
						</thead>
						<tbody>
							@foreach($libros as $l)
							  <tr>

								<td><img src='{{$l->imagen}}' width="250" height="250"></td>
								  <td><b>ISBN: </b>{{$l->isbn}}</td>
								  <td><b>Nombre: </b>{{$l->nombre}}</td>
								<td><b>Precio: </b>{{$l->precio}} €</td>
								 
								  
								  <td><input name='libros[]' type="checkbox" value="{{$l->id_libro}}"></td> 

							  </tr>
						
							@endforeach
						</tbody>

					</table>
					
					<input onclick="myFunction()" type='submit' class="btn btn-primary boton" role="button" value='Confirmar'>
					
					
					
					
			    </form>

            <input type="button" class="btnCancelar btn-primary" onclick="history.back()" name="volver atrás" value="Cancelar">
    </div> 
       <br><br>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="104639161367149"
  theme_color="#FCAD2C"
  logged_in_greeting="Hola! Cรณmo podemos ayudarte?"
  logged_out_greeting="Hola! Cรณmo podemos ayudarte?">
      </div>


<script>
$(document).ready( function () {
	$('#example').DataTable({
		responsive: true,
		"order": [[ 0, "desc" ]],
		"lengthMenu": [[12, 25, 50, -1], [12, 25, 50, "All"]],
		"language": {
		  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
		}
	});
} );
	
	
	

	
	
	
	

$(document).ready( function () {
	$("#example").toggleClass('cards')
	$("#example thead").toggle();
 });
	
	
	
</script>




@endsection



<script>
function myFunction() {
	
	alertify.success("Reserva Confirmada");
}

</script>




