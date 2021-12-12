@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <a href="{{url('cart/')}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Carrrito de Compras</a>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   {{-- Agregar producto --}}
                   <div class="row">
                       @foreach($products as $product)
                       <div class="col-6">
                           <img src="{{$product->photo}}" with="300" heigth="300">
                           <h4>{{$product->name}}</h4>
                           <p>{{ Str::limit(strtolower($product->descripcion),50)}}</p>
                           <p><strong>Precio :</strong>{{$product->price}}</p>

                           <a href="{{url('add-to-cart/'.$product->id)}}" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Agregar al carrito</a>
                    
                            <a href="{{url('product-detail/'.$product->id)}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Detalle</a>
                    
                       </div>
                       @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection