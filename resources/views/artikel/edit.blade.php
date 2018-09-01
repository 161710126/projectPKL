@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Artikel
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('artikels.update',$artikels->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}  
			  		
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikels->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

	                <div class="form-group {{ $errors->has('poto') ? ' has-error' : '' }}">
			  			<label class="control-label">poto</label>	
			  			<input type="file" name="poto" class="form-control" value="{{ $artikels->poto }}"  required>
			  			@if ($errors->has('poto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('poto') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		 <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">deskripsi</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $artikels->deskripsi }}"  required>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kategoriartikel_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Artikel</label>	
			  			<select name="kategoriartikel_id" class="form-control">
			  				@foreach($kartikel as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_artikel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategoriartikel_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoriartikel_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection