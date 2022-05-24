<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;
class AdminController extends Controller
{
    public function user(){
        $data=user::all();      
        return view('admin.user', compact('data'));
    }
    public function delete($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deleteMenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateMenu($id){
        $data =  Food::find($id);        
        return view('admin.updatemenu',compact('data'));     
    }
    public function updateMenus(Request $request, $id){
        
        $data = Food::find($id);      
        $image = $request->image;      
        $imagename =time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
    public function FoodMenu(){
         $data = Food::all();
        
        return view('admin.foodmenu', compact('data'));
    }
     public function uploadFood(Request $request){
         $data = new Food;
         $image = $request->image;
         $imagename =time(). '.'.$image->getClientOriginalExtension();
         $request->image->move('foodimage',$imagename);
         $data->image=$imagename;
         $data->title=$request->title;
         $data->price=$request->price;
         $data->description=$request->description;
         $data->save();
        return redirect()->back();
    }
    public function uploadChef(Request $request){
         $data = new Chef;
         $image = $request->image;
         $imagename =time(). '.'.$image->getClientOriginalExtension();
         $request->image->move('chefsimage',$imagename);
         $data->image=$imagename;
         $data->name=$request->name;
         $data->speciality=$request->speciality;
         $data->save();
        return redirect()->back();
    }
    public function Reservation(Request $request){
         $data = new Reservation;
         
         $data->name=$request->name;
         $data->email=$request->email;
         $data->phone=$request->phone;
         $data->guest=$request->guest;
         $data->date=$request->date;
         $data->time=$request->time;
         $data->message=$request->message;
         $data->save();
        return redirect()->back();
    }
    // view reservation list
    public function viewrReservation(){
        $data=Reservation::all();
        return view('admin.adminreservation',compact('data'));
    } 
    // order list
    public function viewOrders(){

       $data=Order::all();
       return view('admin.adminorder',compact('data'));

    } 
    //for seaching 
    public function searchOrders(Request $request){

        $search = $request->search;
        
        $data=Order::where('name', 'LIKE', '%' .$search. '% ')->orwhere('foodname', 'LIKE', '%' .$search. '% ')->get();
        return view('admin.adminorder',compact('data'));  

    } 
    public function Chef(){
        $data = Chef::all();
        return view('admin.adminchef',compact('data'));
    }

    public function updateChef($id){
        $data = Chef::find($id);
        return view('admin.updatechef',compact('data'));
    }

    public function updatedchef(Request $request, $id){
        
        $data = Chef::find($id);
       
        $image = $request->image;      
        $imagename =time(). '.'.$image->getClientOriginalExtension();
        $request->image->move('chefsimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }
    // delete chef
    public function deleteChef($id)
    {
        $data = Chef::find($id);
        $data->delete();
        return  redirect()->back();
    }

}
