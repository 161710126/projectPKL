@extends('layouts.member')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ASSALAMUALIKUM WR.WB</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                Selamat datang di member
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
