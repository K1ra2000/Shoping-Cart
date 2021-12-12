<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    //Funciones para el crud del producto.
    public function index(){

        $products = Product::all();
        return view('products',compact('products'));
    }
    public function show($id){

        $product = Product::find($id);
        return view('detail')->with('product',$product);
    }
    
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id){

       
        // Logica para agregar producto

            $product = Product::find($id);
            $cart = session()->get('cart');


        //if cart is empty then this the first product
        if(!$cart)
        {
            $cart =[
                $id =>[
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
             ];

             session()->put('cart',$cart);

             return redirect()->back()->with('success','Producto agregado  al carro');

            }

            // if cart not empty then check if this product exist then increment quantily
             if(isset($cart[$id])) {

                $cart[$id]['quantity']++;

                session()->put('cart',$cart);

                return redirect()->back()->with('success','Producto agregado  al carro');
   
             }



            //if item not exist in cart then add to cart with quality = 1
             $cart[$id]= [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo

                ];
                    
                     session()->put('cart',$cart);
                     return redirect()->back()->with('success','Producto agregado  al carro');
   
                
                        



    }
    
    public function destroy($id)
    {
        Product::remove($id);
        return back()->with('success', 'Producto eliminado');
    }

}
