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
    border-radius: 10px !important;
    color: #fff !important;
    text-transform: uppercase !important;
    font-weight: 600 !important;
    margin: 10px 0 !important;
    cursor: pointer !important;
    transition: 0.5s !important;
	}
	
	.image-container{
		width: 100% !important;
		margin-left: 20%;
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
  margin-left: 5% !important;
  border-radius: 10px !important;
}
	
	
	.text-container{
		margin-top: 4% !important;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		background: white !important;
		padding: 20px;
		border-radius: 10px !important;
		height: auto;
	}
	
	
	
	
	.carousel-gallery {
  margin: 50px 0;
  padding: 0 30px;
}
.carousel-gallery .swiper-slide a {
  display: block;
  width: 100%;
  height: 200px;
  border-radius: 4px;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 3px 2px 20px 0px rgba(0, 0, 0, 0.2);
}
.carousel-gallery .swiper-slide a:hover .image .overlay {
  opacity: 1;
}
.carousel-gallery .swiper-slide a .image {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center center;
}
.carousel-gallery .swiper-slide a .image .overlay {
  width: 100%;
  height: 100%;
  background-color: rgba(20, 20, 20, 0.8);
  text-align: center;
  opacity: 0;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.carousel-gallery .swiper-slide a .image .overlay em {
  color: #fff;
  font-size: 26px;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  display: inline-block;
}
.carousel-gallery .swiper-pagination {
  position: relative;
  bottom: auto;
  text-align: center;
  margin-top: 25px;
}
.carousel-gallery .swiper-pagination .swiper-pagination-bullet {
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.carousel-gallery .swiper-pagination .swiper-pagination-bullet:hover {
  opacity: 0.7;
}
.carousel-gallery .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background-color: #d63031;
  transform: scale(1.1, 1.1);
}
	
	
	.swiper-container{
		height: 380px !important;
	}
	
	.swiper-wrapper{
		height: 60% !important;
	}
	
	.swiper-slide{
		height: 50% !important;
	}
	
	.carousel-gallery{
		height: 35% !important;
	}
	
	.container2{
		width: 100%;
		height: auto;
		background: white;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		padding: 50px;
		display: inline-block;
		
		
		
	}
	
	.misReservas{
		background-image: url("/img/headerlibros2.jpg");
		background-size: 30% 30%;
		background-repeat: no-repeat;
		width: 20%;
		min-width: 250px;
		height: 200px;
		display: inline-block;
		margin-left: 10%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		border-radius: 10px;
		padding: 20px;
		text-align: center;
		margin-top: 50px;

	
	}
	
	.misReservas:hover{
		transform: scale(1.1);
	}
	
	a{
		text-decoration: none;
	}
	
	
	
	



</style>

@extends('layouts.head2')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<div class="container1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 align="center">Reservas de Libros de Texto: 2020/2021</h1><br><br><br>
                            <h4 class="p-large" align="center">Reserva los libros antes que nadie</h4>
							
									

								<div class="carousel-gallery">
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<a href="https://images.pexels.com/photos/48794/boy-walking-teddy-bear-child-48794.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
													<div class="image" style="background-image: url(https://static.carrefour.es/hd_510x_/crs/cdn_static/catalog/hd/358309_00_1.jpg)">
														<div class="overlay">
															<em class="mdi mdi-magnify-plus"></em>
														</div>
													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="https://images.pexels.com/photos/248280/pexels-photo-248280.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
													<div class="image" style="background-image: url(https://1.bp.blogspot.com/-cZEZv6LPWg4/WpQ2BoPzGMI/AAAAAAAAF0c/ju7ChJHQ6Co9Ko4wbmOi2DPEdwIjxbA0QCLcBGAs/s1600/9788468040073.jpg)">
														<div class="overlay">
															<em class="mdi mdi-magnify-plus"></em>
														</div>
													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="https://images.pexels.com/photos/89095/pexels-photo-89095.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
													<div class="image" style="background-image: url(https://images-na.ssl-images-amazon.com/images/I/91bIodDqA+L.jpg)">
														<div class="overlay">
															<em class="mdi mdi-magnify-plus"></em>
														</div>
													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="https://images.pexels.com/photos/669319/pexels-photo-669319.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
													<div class="image" style="background-image: url(https://3.bp.blogspot.com/-ElohhhCyN1I/WOOFYjCqVJI/AAAAAAAACYs/9eSmY_oQOTYU317MN9LRFw77_1ITz9rNACLcB/s1600/9788467852349.jpg)">
														<div class="overlay">
															<em class="mdi mdi-magnify-plus"></em>
														</div>
													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="https://images.pexels.com/photos/277477/pexels-photo-277477.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
													<div class="image" style="background-image: url(https://images-na.ssl-images-amazon.com/images/I/71VyO8J9asL.jpg)">
														<div class="overlay">
															<em class="mdi mdi-magnify-plus"></em>
														</div>
													</div>
												</a>
											</div>
											<div class="swiper-slide">
												<a href="https://images.pexels.com/photos/928276/pexels-photo-928276.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
													<div class="image" style="background-image: url(https://www.agapea.com/Santillana-Educacion-S-L-/Matematicas-aplicadas-3-ESO-i6n12000941.jpg)">
														<div class="overlay">
															<em class="mdi mdi-magnify-plus"></em>
														</div>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-pagination"></div>
									</div>
								</div>							
						
						
							
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




<div class="container2">
	
	<a id="link" href="/ReservasUsuario"><div class="misReservas" ><img src="/img/reserva.png" width="100" height="100"><br><br>Mis Reservas</div></a>
	<a href="{{url('/reservas')}}/{{Auth::user()->id}}"><div class="misReservas"><img src="/img/user.png" width="100" height="100" class="imgDatos"><br><br>Mis Datos</div></a>
	<div class="misReservas"><img src="/img/cita.png" width="100" height="100">
		<br><br>"-"</div>

	
</div>
@endsection
	
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>

	
$(function(){
  
    var swiper = new Swiper('.carousel-gallery .swiper-container', {
      effect: 'slide',
      speed: 900,
      slidesPerView: 5,
      spaceBetween: 20,
      simulateTouch: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false
      },
      pagination: {
        el: '.carousel-gallery .swiper-pagination',
        clickable: true
      },
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 5
        },
        // when window width is <= 480px
        425: {
          slidesPerView: 2,
          spaceBetween: 10
        },
        // when window width is <= 640px
        768: {
          slidesPerView: 3,
          spaceBetween: 20
        }
      }
    }); /*http://idangero.us/swiper/api/*/
  
    
  
});
</script>