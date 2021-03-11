
<style type="text/css">
	
	html, body{
  font-family: 'Overpass', sans-serif;
  padding:0px;
  margin:0px;
}#sidebar-container{
  visibility:hidden;
  opacity: 0;
  transition: all .25s;
}
#sidebar{
  user-select:none;
}

#sidebar-container{
  visibility:visible;
  opacity: 1;
}
#sidebar-container img {
  max-width:36px;
}

#sidebar{
  position: fixed;
  left: 0;
  height: 2000px; /*100vh */
  background: #1C2020;
}
#sidebar ul{
  padding:0px;
  margin:0px;
  list-style:none;
}

#sidebar ul li {
  font-size:16px;
  transition: all 0.25s;
  width:120px;
  /*height:120px;*/
	height:128px; /*20vh*/
  background: #1C2020;
  display:flex;
  text-align:center;
}
#sidebar ul li:hover {
  background:deepskyblue;
	/* background:#2f2f2f; */
}
#sidebar ul li *{
  text-decoration:none;
  color:white;
  margin:auto;
}
@media (max-height: 768px) {
	li.sidebar-list {
		max-height:153px;
	}
}
@media (max-height: 736px) {
	li.sidebar-list {
		max-height:147px;
	}
}
@media (max-height: 690px) {
	li.sidebar-list {
		max-height:138px;
	}
}
@media (max-height: 667px) {
	li.sidebar-list {
		max-height:133px;
	}
}
@media (max-height: 640px) {
	li.sidebar-list {
		max-height:128px;
	}
}
@media (max-height: 600px) {
	li.sidebar-list {
		max-height:120px;
	}
}
@media (max-height: 598px) {
	li.sidebar-list {
		max-height:119px;
	}
}
@media (max-height: 568px) {
	li.sidebar-list {
		max-height:113px;
	}
}
@media (max-height: 533px) {
	li.sidebar-list {
		max-height:100px;
	}
}
@media (max-height: 504px) {
	li.sidebar-list {
		max-height:94px;
	}
}
@media (max-height: 480px) {
	li.sidebar-list {
		max-height:82px;
	}
}
@media (max-height: 428px) {
	li.sidebar-list {
		max-height:65px;
	}
}
@media (max-height: 346px) {
	li.sidebar-list {
		max-height:55px;
	}
}

	
  .card-body, .card, .col-md-8, .container, .row, .justify-content-center
	{   
	  width: 1200px; 	  
	}

	button{
		width: 70%;
		height: 80px;
		
	}
	
	tr{
		text-align: center;
	}
	
	.div-button{
		margin-left: 20%;
		margin-top: 30px;
	}
	.row{
		margin-top: 0px;
		margin-left: -100px;
		
	}
	
	.menu{
		margin-top: -150px;
	}

</style>

@extends('layouts.head')

@section('content')

<div id="sidebar" style="top:initial;right:initial;" class='menu'>
  <ul id="nav-container">
	  
	  <br><br> <br><br>
    <li class="sidebar-list"><a href="/home"><img src="https://segurosncs.com/wp-content/uploads/2017/12/hogar-slide-blanco.png" width="30" height="30"/><br>Inicio</a></li>
    
	 <li class="sidebar-list"><a href="/insertar"><img src="https://e1.pngegg.com/pngimages/1019/842/png-clipart-light-dock-icons-folder-folder-icon.png"  width="40" height="40" /><br>Insertar</a></li> 
	  
    <li class="sidebar-list"><a href="/chart"><img src="https://plataformaanticorrupcion.pe/wp-content/uploads/2017/07/estadistica_blanco-1.png"  width="50" height="50"/><br>Estadisticas</a></li>
    
    <li class="sidebar-list"><a href="/pdf"><img src="https://www.avanzadi.com/wp-content/uploads/2019/06/03_icono-inventario.png"  width="40" height="40" /><br>Inventario</a></li>
    
   
  </ul>
</div>


<!--
<div class='utils'>
	
	<div class="card-header">{{ __('UTILIDADES') }}</div>
	
	<div class='div-button'>
		<button class="btn btn-primary" onclick="window.location.href='/pdf'">INVENTARIO PDF</button>
	</div>
	<div class='div-button'>
		<button class="btn btn-primary" onclick="window.location.href='/qrcode'">QR</button>
	</div>
	
	
</div>
-->

<div class="container">
    <div>
        <div>
            <div class="card">
                <div class="card-header">{{ __('LISTA DE RESERVAS') }}</div>

                
				
				
				<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped" id='example'>
						<thead>
							<tr>

								<th>Numero Reserva</th>
								<th>Fecha De La Reserva</th>
								<th>Datos Del Cliente</th>
								<th>Libros</th>
							</tr>
						</thead>
						<tbody>
							@foreach($reservas as $r)
							  <tr>

								<td>{{$r->id_reserva}}</td>


								<td>{{$r->fecha_reserva}}</td>
								  
								<td>
									<a href="{{url('/reservas')}}/{{$r->id_users}}" class="btn btn-primary">Cliente</a>
								</td>
								  
								<td>
									<a href="{{route('LibroUsuario', $r->id_reserva)}}" class="btn btn-success">Libros</a>
								</td>

							  </tr>

							@endforeach
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready( function () {
	$('#example').DataTable({
		"order": [[ 0, "desc" ]]
	});
} );
</script>


@endsection


