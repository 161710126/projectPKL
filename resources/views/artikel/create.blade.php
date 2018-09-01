@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Artikel </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('artikels.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('judul') ? 'has-error' : '' }}">
				<label class="control-label">judul</label>
				<input type="text"  name="judul" class="form-control" required>
				@if ($errors->has('judul'))
				<span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
				@endif
			</div>

			  <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>

			<div class="form-group {{$errors->has('deskripsi') ? 'has-error' : '' }}">
				<label class="control-label">deskripsi</label>
				<input type="text"  name="deskripsi" class="form-control" required>
				@if ($errors->has('deskripsi'))
				<span class="help-block"><strong>{{ $errors->first('deskripsi') }}</strong></span>
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


