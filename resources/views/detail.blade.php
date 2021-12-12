@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalle de producto') }}</div>
                <a href="{{url('products/')}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Productos</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <div class="row">
                      <div class="col-6">
                           <img src="{{$product->photo}}" with="300" heigth="300">
                           <h4>{{$product->name}}</h4>
                           <p>{{ Str::limit(strtolower($product->descripcion),50)}}</p>
                           <p><strong>Precio :</strong>{{$product->price}}</p>

                      </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
