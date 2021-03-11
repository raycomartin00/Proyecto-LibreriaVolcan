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
	.chartReservas{
		width: 700px;
		height: 800px;
		display: flex;
		margin-left: 10%;
		border: 3px solid;
	}
	
	.chartUsers{
		width: 750px;
		height: 370px;
		display: flex;
		margin-left: 50%;
		margin-top: -800px;
		border: 3px solid;
	}
	.chartReservasXUsers{
		width: 750px;
		height: 370px;
		display: flex;
		margin-left: 50%;
		margin-top: 60px;
		border: 3px solid;
	}

</style>

@extends('layouts.head')

@section('content')

<div id="sidebar" style="top:initial;right:initial;" class='menu'>
  <ul id="nav-container">
	  
	  <br><br> <br><br>
    <li class="sidebar-list"><a href="/home"><img src="https://segurosncs.com/wp-content/uploads/2017/12/hogar-slide-blanco.png" width="30" height="30"/><br>Inicio</a></li>
    
	 <li class="sidebar-list"><a href="/insertar"><img src="https://c0.klipartz.com/pngpicture/842/515/gratis-png-directorio-de-iconos-de-computadora-porta-carpetas.png"  width="40" height="40" /><br>Insertar</a></li> 
	  
    <li class="sidebar-list"><a href="/chart"><img src="https://plataformaanticorrupcion.pe/wp-content/uploads/2017/07/estadistica_blanco-1.png"  width="50" height="50"/><br>Estadisticas</a></li>
    
    <li class="sidebar-list"><a href="/pdf"><img src="https://www.avanzadi.com/wp-content/uploads/2019/06/03_icono-inventario.png"  width="40" height="40" /><br>Inventario</a></li>
    
   
  </ul>
</div>


						
 <div id="container2" class='chartReservas'></div>
 <div id="container3" class='chartUsers'></div>
 <div id="container" class='chartReservasXUsers'></div> 
						



<script src="https://code.highcharts.com/highcharts.js"></script>	
	
<script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;

    Highcharts.chart('container', {
		colors: ['#FCAD2C  ','#000000 ','#1aadce'],
        title: {
            text: 'Nuevos Clientes, 2021'
        },
		chart: {
			type: 'column'
		},
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Número De Clientes'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nuevos Clientes',
            data: userData
        },
		{
			type: 'spline',
			name: 'Objetivo',
			data: [3, 4, 4, 6],
			marker: {
				lineWidth: 2,
				lineColor: Highcharts.getOptions().colors[3],
				fillColor: 'white'
			}
		},],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
	
	
	
	var ReservasData = <?php echo json_encode($ReservasData)?>;

    Highcharts.chart('container2', {
		colors: ['#FCAD2C  ','#000000','#1aadce'],
        title: {
            text: 'Reservas, 2021'
        },
		chart: {
			type: 'column'
			
		},
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
			
        },
        yAxis: {
            title: {
                text: 'Número De Reservas'
				
            }
			
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
			
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Nuevas Reservas',
            data: ReservasData
        },
				{
        type: 'spline',
        name: 'Objetivo',
        data: [80, 120, 130, 160, 200],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    },],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
	
	
	var ReservasXUsersData = <?php echo json_encode($ReservasXUsersData)?>;

    Highcharts.chart('container3', {
		
		colors: ['#FCAD2C  ','#000000','#1aadce'],
        title: {
            text: 'Reservas Por Cliente, 2021'
        },
		chart: {
			type: 'bar'
		},
        xAxis: {
            categories: ['1', '2', '3', '4', '5', '6']
        },
        yAxis: {
            title: {
                text: 'Número de reservas'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Reservas',
            data: ReservasXUsersData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>
@endsection
    


