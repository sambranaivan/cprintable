@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="row">


                @foreach ($modelos as $model)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-md-3">
                        <div class="card">

                            <h2 class="text-center">{{$model->personaje}}</h2>
                            <label class="label text-center text-muted">{{$model->variacion}}</label>
                            <img src={{asset('img/'.$model->code.'.jpg')}} class="img-fluid rounded responsive" alt="">
                            <ul class="list-group">
  <li class="list-group-item"><label class="text-center">3D printable Model</label></li>
                                @if ($model->status == 'soon')
                                    <li class="list-group-item"><button class="btn btn-danger btn-block">
                                            Download Soon
                                    </button>
                                @else
                                    <li class="list-group-item"><a href="https://www.cgtrader.com/vongoladecimo" class="btn btn-success btn-block">DOWNLOAD</a> </li>

                                @endif
</ul>

                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
