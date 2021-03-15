
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


<div class="containerLibros">
	

                    
				<form method='POST' action="{{route('reservas.store')}}">
					
					@csrf
					<table class='table table-bordered table-striped'  id='example'>

						
						<thead>
							<tr>

								<th>Selecciona</th>
								<th>Nombre</th>
								<th>Editorial</th>
								<th>Imagen</th>
							</tr>
						</thead>
						<tbody>
							@foreach($libros as $l)
							  <tr>

								<td><input name='libros[]' type="checkbox" value="{{$l->id_libro}}"></td> 

								<td>{{$l->nombre}}</td>


								<td>{{$l->Editorial->nombre}}</td>

								  <td><img src='{{$l->imagen}}' width="100" height="100"></td>

							  </tr>

							@endforeach
						</tbody>

					</table>
					
					<input onclick="myFunction()" type='submit' class="btn btn-primary boton" role="button" value='Confirmar'>
					
					
					
					
			    </form>
                   
    </div> 


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
		"order": [[ 0, "desc" ]],
		"lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
		"language": {
		  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
		}
	});
} );
</script>
@endsection



<script>
function myFunction() {
	
	alertify.success("Reserva Confirmada");
}

</script>




