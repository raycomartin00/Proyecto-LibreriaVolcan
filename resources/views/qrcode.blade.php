<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

@extends('layouts.head')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Facebook Qr') }}</div>

                <div class="card-body">
                    
					
					<div class="text-center" style="margin-top: 50px;">
						

						{!! QrCode::size(300)->generate('https://www.facebook.com/LibreriaPapeleriaVolcan/'); !!}

						
					</div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




