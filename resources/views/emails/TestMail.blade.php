<DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Libreria Volcan</title>
	</head>
	<body>
		
		<h1>{{$details['title']}}</h1>
		<p>{{$details['body']}}</p>
		
		<table border="1">
			
		  <tr>
			<td><b>Nombre: </b></td>
			<td>{{$user->name}}</td>
		  </tr>
			
		  <tr>
			<td><b>Apellidos: </b></td>
			<td>{{$user->apellidos}}</td>
		  </tr>
			
		  <tr>
			<td><b>DNI:</b></td>
			<td>{{$user->dni}}</td>
		  </tr>
			
		   <tr>
			<td><b>Dirección:</b></td>
			<td>{{$user->direccion}}</td>
		  </tr>
			
		  <tr>
			<td><b>Teléfono:</b></td>
			<td>{{$user->telefono}}</td>
		  </tr>

		</table>
		
		
	</body>
</html>