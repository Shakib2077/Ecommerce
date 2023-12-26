<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
// use Session;


class ProductController extends Controller
{
    function index()
    {
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%' . $req->input('search'). '%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addTocart(Request $req)
    {
       if($req->session()->has('user'))
       {
          $cart=new Cart;
          $cart->user_id=$req->session()->get('user')['id'];
          $cart->product_id=$req->product_id;
          $cart->save();
          return redirect ('/');
       }
       else
       {
        return redirect ('/login');
       }
       
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartlist()
    {
        $userId = session('user')['id'];
        $data= DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->select('products.*')
        ->where('cart.user_id', $userId)
        ->get();

        return view('cartlist', ['products'=>$data]);
    }
}
