@extends('layouts.frontend')
@section('konten')

<div class="container">
			<div class="row team">
				<div class="col-md-4 b1">
				@foreach($gurus as $data)
						<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px">
						
				    	<h4>{{ $data->nama}}</h4>
						<h4>{{ $data->jabatan }}</h4>
						
				</div>
			@endforeach
			</div>
			</div>
		</div>
		@endsection