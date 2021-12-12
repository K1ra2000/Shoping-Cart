@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tienda virtual') }}</div>
                <a href="{{url('products/')}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Productos</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    es tu tienda virtual!
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
