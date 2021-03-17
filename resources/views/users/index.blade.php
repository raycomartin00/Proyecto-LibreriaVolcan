
<style>

* {
  margin: 0;
  padding: 0;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

	body{
		background-image: url("/img/headerlibros3.jpg") !important;
		background-size: 100% 100% !important;
	}

.main-container {
  background-color: #fff;
  width: 90%;
  max-width: 100%;
  padding: 2rem;
  border-radius: 5px;
  box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
  margin-left: 5%;
}
.profile-content {
  display: flex;
  width: 100%;
  margin: 10px 25px;
  justify-content: space-between;
  align-items: center;
}
.body-content {
  margin: 10px 25px;
}
.profile-img {
  display: flex;
  align-items: center;
}

button {
  width: 160px;
  height: 50px;
  transform: translate(-30%, -30%);
  background-color: black;
  color: #fff;
  border-radius: 5px;
  border: none;
}

.profile-img img {
  width: 100px;
  border: none;
  border-radius: 50%;
  height: 100px;
  margin-right: 10px;
}
span {
  color: gray;
  margin-right: 8px;
}
span:hover {
  color: blue;
  cursor: pointer;
}
.break {
  width: 85%;
  margin: 20px 7.4% 0;
  opacity: 1;
}

ul {
  display: flex;
  justify-content: start;
}
ul > li {
  list-style: none;
  margin: 10px;
  color: bisque;
}
li a {
  text-decoration: none;
  color: darkgray;
  font-size: 14px;
}

ul > li .active {
  color: black;
  font-size: 16px;
  font-weight: bold;
}
a:hover {
  color: blue;
  text-decoration: wavy;
  border-bottom: 1px turquoise solid;
}

/* card */
.main {
  display: grid;
  /* flex-direction: row; */
  grid-template-columns: repeat(3, 1fr);
  margin-top: 20px;
  gap: 20px;
  align-items: baseline;
  justify-content: space-between;
}
.card {
  background-color: #fff;
  border: 1px solid whitesmoke;
  padding: 2rem;
  border-radius: 10px;
  cursor: pointer;
}
.card:hover {
  background-color: black;
  color: #fff;
  border: none;
  box-shadow: 1px 2px 3px rgba(212, 208, 208, 0.2);
}
.card p {
  margin: 0;
}
.card .num {
  font-size: 1.5rem;
}
.main .bg-dark {
  background-color: black;
  color: #fff;
  border: none;
  box-shadow: 1px 2px 3px rgba(212, 208, 208, 0.2);
}
 .inf-content{
	border:1px solid #DDDDDD;
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
}

	.col-md-6{
		display: inline-block !important;
	}
	
	.mapa{
		
		display: inline-block !important;
		width: 45%;
		height: 200px;
		position: relative;
		
	}
	
	
	@media (max-width: 767px) {
	  .mapa{
		
		display: inline-block !important;
		width: 90%;
		height: 200px;
		position: relative;
		top: 0px;
	}
	}
	
	.btn {
  width: auto;
  background-color: #ff7125;
  border: none;
  outline: none;
  height: auto;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}
	

</style>
@extends('layouts.head')

@section('content')

  <div class="main-container">
    <div class="profile-content">
      <div class="profile-img">
        <img src="https://cactusthemes.com/blog/wp-content/uploads/2018/01/tt_avatar_small.jpg" />
        <div class="name">
          <h2>{{$user->name}}</h2>
          
        </div>
      </div>
   
    </div>
    <!-- break -->
    <hr class="break" />
    <div class="body-content">
    

     <div class="col-md-6"><br>
            <strong>Información referente al usuario</strong><br><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Nombre                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                              {{$user->name}}   
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Apellidos                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                                {{$user->apellidos}}
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                           {{$user->email}} 
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                Dirección                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->direccion}} 
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                DNI                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->dni}}
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Teléfono                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            {{$user->telefono}}  
                        </td>
                    </tr>
                
                                                     
                </tbody>
            </table>
				<input type="button" class="btn btn-primary" onclick="history.back()" name="volver atrás" value="Cancelar">
            </div>
        </div>
		
		<div class="mapa" id="map">
			
			
		
		
		
		</div>
		
		
		
      
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="/assets/gmap3.js?body=1" type="text/javascript"></script>


<script>
	

(function() {
  var map, mapOptions, marker, position;

  position = new google.maps.LatLng(51.5001985, -0.0900256);

  mapOptions = {
    zoom: 14,
    center: position,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map($('#map')[0], mapOptions);

  marker = new google.maps.Marker({
    position: position,
    map: map
  });

  marker.setMap(map);

}).call(this);
</script>
@endsection