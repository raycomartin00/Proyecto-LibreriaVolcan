
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
  width: auto !important;
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
	
	.btnCancelar {
  width: 100px !important;
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
	
	
	
	.direccion{
		margin-right: 20px;
	}
	
	.tituloMapa{
		text-align: center;
	}
	
	.botonLocalizar{
		position: relative;
		left: 40%;
	}
	
	@media (max-width: 760px) {
		
		.main-container {
		
			height: 1300px
		}
	}
	
	

	
	
	

	

</style>
@extends('layouts.head2')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


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
                        <td style="vertical-align:middle;">
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span><i class="material-icons">person</i>
                                Nombre                                                
                            </strong>
                        </td>
                        <td class="text-primary" style="vertical-align:middle;">
                              {{$user->name}}   
                        </td>
                    </tr>
                    <tr>    
                        <td style="vertical-align:middle;">
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span><i class="material-icons">perm_identity</i>    
                                Apellidos                                               
                            </strong>
                        </td>
                        <td class="text-primary" style="vertical-align:middle;">
                                {{$user->apellidos}}
                        </td>
                    </tr>
                    <tr>        
                        <td style="vertical-align:middle;">
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  <i class="material-icons">email</i>
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary" style="vertical-align:middle;">
                           {{$user->email}} 
                        </td>
                    </tr>

                    <tr>        
                        <td style="vertical-align:middle;">
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> <i class="material-icons">directions</i>
                                Dirección                                                
                            </strong>
                        </td>
                        <td class="text-primary" style="vertical-align:middle;">
                            {{$user->direccion}} 
                        </td>
                    </tr>


                    <tr>        
                        <td style="vertical-align:middle;">
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> <i class="material-icons">person</i>
                                DNI                                                
                            </strong>
                        </td>
                        <td class="text-primary" style="vertical-align:middle;">
                            {{$user->dni}}
                        </td>
                    </tr>
                    <tr>        
                        <td style="vertical-align:middle;">
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> <i class="material-icons">local_phone</i>
                                Teléfono                                                
                            </strong>
                        </td>
                        <td class="text-primary" style="vertical-align:middle;">
                            {{$user->telefono}}  
                        </td>
                    </tr>
                
                                                     
                </tbody>
            </table>
				<br>
				<input type="button" class="btnCancelar btn-primary" onclick="history.back()" name="volver atrás" value="Cancelar">
            </div>
        </div>
		
		
	<div class="mapa">
		
    <h4 class="tituloMapa"><i class="material-icons direccion">gps_fixed</i>Dirección del Usuario</h4>
    
    <div id="myMap" style="position:relative;width:100%;height:400px;"></div>
    
		<input type="button" class="btn btn-primary botonLocalizar" onclick="Search()" name="volver atrás" value="Localizar">
	</div>
	
      
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="/assets/gmap3.js?body=1" type="text/javascript"></script>



<script type='text/javascript'>
	
    var map, searchManager;

    function GetMap() {
        map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'AoaYodMyYzr6FKffoegdrUDjxq0AiATAFxh5ytQST5F_SZon5fQZ2AhYMpThps7u'
        });
    }

    function Search() {
        if (!searchManager) {
            //Create an instance of the search manager and perform the search.
            Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
                searchManager = new Microsoft.Maps.Search.SearchManager(map);
                Search()
            });
        } else {
            //Remove any previous results from the map.
            map.entities.clear();

            //Get the users query and geocode it.
			
            var query = '{{$user->direccion}}';
            geocodeQuery(query);
        }
    }
	
	

    function geocodeQuery(query) {
        var searchRequest = {
            where: query,
            callback: function (r) {
                if (r && r.results && r.results.length > 0) {
                    var pin, pins = [], locs = [], output = 'Results:<br/>';

                    for (var i = 0; i < r.results.length; i++) {
                        //Create a pushpin for each result. 
                        pin = new Microsoft.Maps.Pushpin(r.results[i].location, {
                            text: i + ''
                        });
                        pins.push(pin);
                        locs.push(r.results[i].location);

                        output += i + ') ' + r.results[i].name + '<br/>';
                    }

                    //Add the pins to the map
                    map.entities.push(pins);

                    //Display list of results
                    

                    //Determine a bounding box to best view the results.
                    var bounds;

                    if (r.results.length == 1) {
                        bounds = r.results[0].bestView;
                    } else {
                        //Use the locations from the results to calculate a bounding box.
                        bounds = Microsoft.Maps.LocationRect.fromLocations(locs);
                    }

                    map.setView({ bounds: bounds });
                }
            },
            errorCallback: function (e) {
                //If there is an error, alert the user about it.
                alert("No results found.");
            }
        };

        //Make the geocode request.
        searchManager.geocode(searchRequest);
    }
	
	

    </script>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>

@endsection