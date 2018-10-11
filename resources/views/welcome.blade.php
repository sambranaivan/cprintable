@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="row">
                
                
                @foreach ($modelos as $model)
                    <div class="col col-md-4">
                        <div class="card">
                        
                            <h2 class="text-center">{{$model->personaje}}</h2>
                            <label class="label text-center text-muted">{{$model->variacion}}</label>

                        
                            
                        </div>
                    </div>  
                       
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection