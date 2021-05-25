
@laravelPWA

<style>

body{
		background-image: url("/img/headerlibros2.jpg") !important;
	}
	
	
	.containerReservas{
		background: white;
		margin-left: 10%;
		padding: 20px;
		width: 80%;
		box-shadow: 9px 5px 24px 5px rgba(0,0,0,0.36) !important;
		border-radius: 10px !important;
	}
	
	
	
	.btnAtras{
	  width: 90px !important;
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
	
	.btnAtras:hover {
	  background-color: #2E2E2E !important;
	}

	
	
	
	
	
	.table tr th {
  font-size: 0.75rem;
  text-transform: uppercase;
}
.table tr td {
  font-size: 0.78rem;
}

.svg-icon {
  width: 1.2em;
  height: 1.2em;
  padding: 0;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #6A1B9A;
}

.svg-icon circle {
  stroke: #6A1B9A;
  stroke-width: 1;
}

.footer .footer-app {
  text-align: center;
  font-size: 0.78rem;
  padding: 10px;
}

.navbar .brand-name {
  font-family: "Montserrat", sans-serif;
  font-size: 1.3em;
  font-weight: 300;
  color: var(--brand-name);
}
.navbar .nav-item {
  text-transform: uppercase;
}
.navbar .nav-item.active .nav-link {
  color: var(--secondary);
}
.navbar .nav-item.active .nav-link .svg-icon path,
.navbar .nav-item.active .nav-link .svg-icon polygon,
.navbar .nav-item.active .nav-link .svg-icon rect {
  fill: var(--secondary);
}
.navbar .nav-item.active .nav-link .svg-icon circle {
  stroke: var(--secondary);
}
.navbar .nav-item .svg-icon {
  margin-top: -4px;
}
.navbar .nav-item .svg-icon path,
.navbar .nav-item .svg-icon polygon,
.navbar .nav-item .svg-icon rect {
  fill: #FFF;
}
.navbar .nav-item .svg-icon circle {
  stroke: #FFF;
}
	
	
	
	.img{
		margin-left: 25%;
		height: 250px;
		width: 50%;
	}
	
	
	
	
	
</style>


@extends('layouts.head2')

@section('content')

<div class="containerReservas">

<img src="https://images.ctfassets.net/alneenqid6w5/3Arm6iWH6MYUYOqy8m64AU/0909b7f0ca9febf44be10452884cddf1/Fluxo_da_Reserva__ES_.png" class="img">
	
<div class="main">
    <div class="container mt-3">
        <div class="card animate__animated animate__fadeIn">
            <div class="card-header">
                
            
                <span class="float-right"> <strong>Estado:</strong> Pendiente</span>

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-6 col-md-6">
                        <h6 class="mb-2">Desde:</h6>
                        <div>
                            <strong>LIBRERÍA PAPELERÍA VOLCÁN</strong>
                        </div>
                        <div>Avda de los Volcanes 60</div>
                        <div>Tajaste, Tinajo</div>
                        <div>Email: libreriavolcan@gmail.com</div>
                        <div>Telefono: 828453467</div>
                    </div>

                    <div class="col-6 col-md-6">
                        <h6 class="mb-2">Para:</h6>
                        <div>
                            <strong>{{auth()->user()->name}} {{auth()->user()->apellidos}}</strong>
                        </div>
                        <div>{{auth()->user()->telefono}}</div>
                        <div>{{auth()->user()->dni}}</div>
                        <div>Email: {{auth()->user()->email}}</div>
                        <div>{{auth()->user()->direccion}}</div>
                    </div>

                </div>

                <div class="table-responsive-sm">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="2%" class="center">Nº</th>
                                <th scope="col" width="20%">Nombre</th>
								<th scope="col" class="d-none d-sm-table-cell" width="10%">ISBN</th>
                                <th scope="col" class="d-none d-sm-table-cell" width="20%">Editorial</th>
                                <th scope="col" width="10%" class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach($libros as $l)
                            <tr>
                                <td class="text-left">1</td>
                                <td class="item_name">{{$l->libro->nombre}}</td>
								<td class="item_desc d-none d-sm-table-cell">{{$l->libro->isbn}}</td>
                                <td class="item_desc d-none d-sm-table-cell">{{$l->libro->Editorial->nombre}}</td>
                                <td class="text-right">{{$l->libro->precio}}€</td>
                            </tr>
                 
                        </tbody>
						
						@endforeach
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
	
	
	
<br>
<button onClick="history.go(-2)" class="btnAtras">inicio</button>

</div>



@endsection