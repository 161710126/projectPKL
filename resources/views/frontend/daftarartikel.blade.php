@extends('layouts.frontend')
@section('kontent')
<div class="container">
				<div class="row news">
					<div class="col-md-6  text-left">
						@foreach($kartikel as $data)
				  	  
				    	<h3>{{ $data->judul}}</h3>

				    	<h3>{{ $data->deskripsi}}</h3>
				    	<a href="" class="thumbnail">
								<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></p></td>
				    	<h3>{{ $data->kategori_artikel->nama_artikel}}</h3>
					
					<hr class="hrNews">
					</div>
					@endforeach
				
    @endsection