<div class="text-right">
    <x-app-layout>
      
   </x-app-layout></div>   

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    @include('admin.admincss')
    <style>
      .container-scroller{
        overflow: auto;
      }
    </style>
  </head>

  <body>
    <div class="container-scroller">     
          @include('admin.navbar')
          <div style="position: relative;top: 60px; right: -150px">
            <form method="post" action="{{url('/uploadfood')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input style="color:white" type="text" name="title" class="form-control" id="exampleInputEmail1"   placeholder="Enter Title">
                  
                </div>
                  <div class="form-group co">
                  <label for="exampleInputEmail1">Price</label>
                  <input style="color:white" type="text" name="price" class="form-control colour" id="exampleInputEmail1"   placeholder="Enter Price">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <input style="color:white"  name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="image">
                </div>
                   <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea  style="color:white" name="description" rows="4" cols="50" class="form-control" id="exampleInputPassword1" placeholder="Description"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <table  bgcolor="#bab2bf" border="10px  margin-top: 59px;">
                <tr>
                   <th style="color:black">Title</th>
                   <th style="color:black">Price</th>
                   <th style="color:black">Description</th>
                   <th style="color:black">Date Added</th>
                   <th style="color:black">update</th>
                   <th style="color:black">Image</th>
                   <th style="color:black">Action</th>
                   <th style="color:black">Action2</th>
                  </tr>
       
              
                   
                   @foreach($data as $data)   
                 
                   <tr>
                       <td style="padding: 5px; color:blue">{{$data->title}}</td>
                       <td style="padding: 5px; color:blue">{{$data->price}}</td>
                       <td style="padding: 5px; color:blue">{{$data->description}}</td>
                       <td style="padding: 5px; color:blue">{{$data->created_at}}</td>
                       <td style="padding: 5px; color:blue">{{$data->updated_at}}</td>
                       <td style="padding: 5px; color:blue"><img width="50" height="60" src="/foodimage/{{$data->image}}"></td>
                       <td style="padding: 5px; color:red"><a href="{{url('/deletemenu',$data->id)}}" ><button class="btn btn-danger"> Delete<button></a></td>
                       <td style="padding: 5px; color:blue"><a href="{{url('/updatemenu',$data->id)}}" ><button class="btn btn-primary"> Update<button></a></td>
                    </tr>
                 
                 @endforeach  
                   
                
           </table>
          </div>
       
    </div>
  
   
     @include('admin.adminscript')
  
  </body>
</html>