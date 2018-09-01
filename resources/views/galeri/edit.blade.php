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
			  	<form action="{{ route('galeris.update',$galeriss->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}  
			  		

	                <div class="form-group {{ $errors->has('poto') ? ' has-error' : '' }}">
			  			<label class="control-label">poto</label>	
			  			<input type="file" name="poto" class="form-control" value="{{ $galeriss->poto }}"  required>
			  			@if ($errors->has('poto'))
                            <span class="help-block">
                                <strong>{{ $errors->first('poto') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kategorigaleri_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Galeri</label>	
			  			<select name="kategorigaleri_id" class="form-control">
			  				@foreach($galeris as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_galeri }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategorigaleri_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategorigaleri_id') }}</strong>
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