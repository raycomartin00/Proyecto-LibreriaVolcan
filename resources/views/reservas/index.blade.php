<style type="text/css">
  .user
	{   
	  width: 1000px; 
	  background: white;
	  
	}
	.libros{
		margin: 4%;
		margin-left: 13%;
	}
	
	.boton{
		margin: 1%;
	}
	
	


</style>

@extends('layouts.head')

@section('content')




<div class="container">
    
                
	<div class='user'>
		
			<div class="card-header">{{ __('LIBRERIA PAPELERÍA VOLCÁN') }}</div>
		
			@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif

			<img class='libros' src="https://stma-alcorcon.centrosfest.net/sites/default/files/styles/noticias_interior/public/field/image/libros_de_texto_2020-2021.png?itok=IzMDT35N" alt="Reservas de libros" >
		
			<br>
			<div class="card-header"><a class="btn btn-primary boton" role="button" href="{{route('reservas.create')}}">Reservar Libros</a></div>
			
	
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
  logged_in_greeting="Hola! Cómo podemos ayudarte?"
  logged_out_greeting="Hola! Cómo podemos ayudarte?">
      </div>
@endsection