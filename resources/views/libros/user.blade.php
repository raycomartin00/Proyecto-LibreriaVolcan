

@extends('layouts.head')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Libros') }}</div>

                <div class="card-body">
                    
					
					<table class='table table-bordered table-striped'>
						<thead>
							<tr>

								<th>Id Libro</th>
								<th>Nombre</th>
								<th>Editorial</th>
							</tr>
						</thead>
					@foreach($libros as $l)
					  <tr>
						  
						<td>{{$l->libro->id_libro}}</td>

						<td>{{$l->libro->nombre}}</td>

						<td>{{$l->libro->Editorial->nombre}}</td>

					  </tr>
						
					@endforeach

					</table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection