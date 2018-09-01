	@extends('layouts.frontend')
	@section('konten')
	<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
					<div class="element col-sm-4   gall branding">
					@foreach($galeris as $data)
						

								<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px">
						<div class="view project_descr ">
							<h3>{{ $data->kategori_galeri->nama_galeri}}</a></h3>
							
						</div>
						@endforeach
					</div>		
		</div>
		@endsection