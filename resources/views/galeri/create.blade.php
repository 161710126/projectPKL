@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Galeri </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('galeris.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			

			  <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
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

				<div class="from-group">
				<button type="submit" class="btn btn-outline-primary">
				<i class="fa fa-save">&nbsp</i>Tambah</button>
				<button type="reset" class="btn btn-outline-success">
				<i class="fa fa-refresh fa-spin">&nbsp</i>Ulangi</button>
			</div>

		</form>
	</div>
</div>
</div>
</div>
</div>
@endsection


