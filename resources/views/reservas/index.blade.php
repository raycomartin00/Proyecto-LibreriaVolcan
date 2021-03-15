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
	
	
	body{
		background-image: url("/img/headerlibros2.jpg") !important;
		background-repeat: no-repeat;
	}
	
	.btn{
    width: 150px !important;
    background-color: #ff7125 !important;
    border: none !important;
    outline: none !important;
    height: auto !important;
    border-radius: 49px !important;
    color: #fff !important;
    text-transform: uppercase !important;
    font-weight: 600 !important;
    margin: 10px 0 !important;
    cursor: pointer !important;
    transition: 0.5s !important;
}
	
	.image-container{
		width: 100% !important;
	}
	
	
	

	
	@media (min-width: 1200px) {
  .container-xl,
  .container-lg,
  .container-md,
  .container-sm,
  .container1 {
    max-width: 80% !important;
  }
}

	.container1,
.container-fluid,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100% !important;
  padding-right: 15px !important;
  padding-left: 15px !important;
  margin-right: auto !important;
  margin-left: auto !important;
}
	
	
	.text-container{
		margin-top: 20% !important;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		background: white !important;
		padding: 20px;
	}
</style>

@extends('layouts.head')

@section('content')



<div class="container1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>Reservas de Libros de Texto: 2020/21</h1>
                            <p class="p-large">Reserva los libros antes que nadie...</p>
                            <a class="btn" role="button" href="{{route('reservas.create')}}">Reservar Libros</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="img/personas.png" alt="alternative" width="800" height="600">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->

<div class="container">
    
                

	
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
@endsection