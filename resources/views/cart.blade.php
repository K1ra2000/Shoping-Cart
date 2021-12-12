@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Carrito de compras') }}</div>  
                <a href="{{url('products/')}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Productos</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                {{--Agregar detalle carrito--}}

                <?php $valor=0?>

                @if(session('cart'))

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Precio Unitario</th>
                            <th>Cantidad</th>
                            <th>Precio Total</th>
                            <th>Foto</th>
                            
                        </tr>
                    </thead>
                

                @foreach(session('cart') as  $id =>$details)

                <?php $valor += $details['price']  * $details['quantity'] ?>
                <tr>
                <th>
                {{ $details['name']}}
                </th>
                
                <th>
                S./{{ $details['price']}} 
                </th>

                <th>
                ${{$details['quantity']}}
                </th>

                <th>
                ${{ $details['price']  * $details['quantity']}}
                </th>
                
                <th>
                <img src="{{$details['photo']}}" width="50" height="50"/>
                </th>
                <th>               
                <button  href="{{url('destroy/')}}" type="button" class="btn btn-danger">Eliminar</button> 
            </th>



            </tr>
                @endforeach
            </table>

                @endif   
                <table align="right">
            <th>
                <div class="badge badge-primary text-wrap" style="width: 10rem; color:blue">
                <p></p>
                <p>Valor S./{{$valor}}</p>
                <p>Valor S./{{$valor*0.18}}</p>
                <p>Total S./{{$valor+$valor*0.18}}</p> 
            </div>
            </th>   
                </table>   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
