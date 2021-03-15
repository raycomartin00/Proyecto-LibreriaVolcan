<style>

	body{
		background-image: url("/img/headerlibros2.jpg");
	}
</style>

@extends('layouts.head')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de libros') }}</div>

                <div class="card-body">
                    
					
					<table class='table'>

					@foreach($libros as $l)
					  <tr>

						<td>{{$l->id_libro}}</td> 
						  
						<td>{{$l->nombre}}</td>

						<td>{{$l->observaciones}}</td>

						<td>{{$l->Editorial->nombre}}</td>

					  </tr>
						
					@endforeach

					</table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection