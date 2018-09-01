@extends('layouts.user')
@section('content')
<br>
<br>
<br><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="BS/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="BS/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="BS/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<h1>
			  <div class="panel-heading"><center>Eskul</center> </h1>

			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table" id="myTable">


				@foreach($eskuls1 as $data)
				   <h2>
		<div class="container marketing">
	    <div class="row">
        <div class="col-lg-4">
        	<center>         	
						<center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
						<br>
				    	<h4>{{ $data->nama}}</h4>
						<h4>{{ $data->content}}</h4>
						 </div><!-- /.col-lg-4 -->
</center>
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