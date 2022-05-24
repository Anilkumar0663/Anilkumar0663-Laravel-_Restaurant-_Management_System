<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;
 
class HomeController extends Controller
{
    public function index(){
        $data=Food::all();
        $data2 = Chef::all();
        return view('home',compact('data','data2'));
    } 
    public function redirects(){
        $data=Food::all();
        $data2=Chef::all();
        $usertype = Auth::user()->usertype;
        if($usertype == '1')
        {
            return view('admin.adminhome');
        }
        else{

            $user_id = Auth::id();
            $count= cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data2','count'));
        }
       
    }
    public function addCart(Request $request, $id){
        if(Auth::id())
        {
            $user_id=Auth::id();
            $food_id=$id;

            $quantity = $request->quantity;

            $cart = new Cart;
            $cart->user_id=$user_id;
            $cart->food_id=$food_id;
            $cart->quantity=$quantity;
            $cart->save();
            
            return redirect()->back();

        }else{
            return redirect('/login');
        }
    }
    public function showCart(Request $request, $id){
        $count = cart::where('user_id',$id)->count(); 
        $data2 = cart::select('*')->where('user_id', '=', $id)->get();
       
        $data = cart::where('user_id',$id)->join('food', 'carts.food_id','=', 'food.id')->get(); 
         return view('showcart',compact('count','data','data2'));
    }
    public function remove($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function confirmOrder(Request $request)
    {
        foreach($request->foodname as $key =>$foodname)
        {
            $data = new Order;
            $data->foodname=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->name=$request->name;
            $data->phone=$request->phone;
            $data->address=$request->address;
            $data->save();
        }
        return redirect()->back();
    }
}