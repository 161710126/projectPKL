@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Artikel</div>
        <div class="card-body"><a class="btn btn-outline-warning" href="{{ route('artikels.create') }}"><i class="fa fa-plus-square">&nbsp</i>Tambah</a>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Judul</th>
					  <th>deskripsi</th>
					  <th>Poto</th>
					  <th>Kategori Artikel</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($kartikel as $data)
				  	  <tr>
				  	  <td>{{ $no++ }}</td>
				    	<td>{{ $data->judul}}</td>

				    	<td>{{ $data->deskripsi}}</td>
				    	<td><p><a href="" class="thumbnail">
								<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></p></td>
				    	<td>{{ $data->kategori_artikel->nama_artikel}}</td>
						<td>
							<a href="{{ route('artikels.edit',$data->id) }}" class="btn btn-outline-primary"><i class="fa fa-file-text">&nbsp</i>Edit</a>
						</td>
						
						<td>
							<form method="post" action="{{ route('artikels.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-outline-danger">
									<i class="fa fa-remove">&nbsp</i>Delete
								</button>
							</form>
						</td>
				      </tr>

				      @endforeach	
				  	</tbody>
				  </table>
				 
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection

	    