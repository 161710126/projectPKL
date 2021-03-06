@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Kategori Artikel
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kategorisgaleri.update',$galeris->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_galeri') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Galeri</label>	
			  			<input type="text" name="nama_galeri" class="form-control" value="{{ $galeris->nama_galeri }}"  required>
			  			@if ($errors->has('nama_galeri'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_galeri') }}</strong>
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