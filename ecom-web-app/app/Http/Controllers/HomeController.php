<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;


class HomeController extends Controller
{

    public function index(){

        return view('home.userpage');
    }

    public function redirect(){

        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');

        }
        else{
            return view('home.userpage');
        }
    }

    public function view_shop(){

        $product=Product::all();
        return view('home.shop',compact('product'));
    }

    

    public function product_details($id){

        $product=Product::find($id);

        return view('home.product_details',compact('product'));
    }

    public function add_cart(Request $request,$id){
        if(Auth::id()){

            $user=Auth::User();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;
            $cart->price=$product->price * $request->quantity;
            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back();

        }
        else{
            return redirect('login');
        }
    }

    public function view_cart(){
        if(Auth::id()){
            
        $id=Auth::User()->id;
        $cart=cart::where('user_id','=',$id)->get();
        return view('home.cart',compact('cart'));
        }
        else{
            return redirect('login');
        }

    }
    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();

    }

    public function cash_on(){

        return view('home.cash_on');
    }

}
