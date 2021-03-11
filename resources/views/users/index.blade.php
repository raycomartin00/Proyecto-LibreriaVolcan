

@extends('layouts.head')

@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cliente') }}</div>

                <div class="card-body">
                    
					
					<table class='table table-bordered table-striped'>
						<thead>
							<tr>

								<th>Id Usuario</th>
								<th>Nombre</th>
								<th>Email</th>
							</tr>
						</thead>
					
					  <tr>

						<td>{{$user->id}}</td> 
						  
						<td>{{$user->name}}</td>

						<td>{{$user->email}}</td>


					  </tr>
						
					

					</table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection