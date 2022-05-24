<div class="text-right">
    <x-app-layout>
      
   </x-app-layout></div>   

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    @include('admin.admincss')
    
  </head>

  <body>
    <div class="container-scroller">     
          @include('admin.navbar')
          <div style="position: relative;top: 60px; right: -150px">
            <form  action="{{url('/updatemenus',$data->id)}}" method="post"  enctype="multipart/form-data">
                @csrf 
                <h1>Update Menu Item</h1>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input style="color:white" type="text" name="title" class="form-control" id="exampleInputEmail1"   placeholder="Enter Title" value="{{$data->title}}">
                  
                </div>
                  <div class="form-group co">
                  <label for="exampleInputEmail1">Price</label>
                  <input style="color:white" type="text" name="price" class="form-control colour" id="exampleInputEmail1"   placeholder="Enter Price" value="{{$data->price}}">
                  
                </div>
                <div class="form-group">
                      <div class="form-group co">
                          <label for="exampleInputEmail1">Old Image</label>
                          <img src="/foodimage/{{$data->image}}" height="100" width="100" alt="">
                        
                       </div>
                     <label for="exampleInputPassword1">Image</label>
                     <input style="color:white"  name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="image" value="{{$data->image}}">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input  style="color:white" name="description" rows="40" cols="50"  value="{{$data->description}}" class="form-control" id="exampleInputPassword1" placeholder="Description" /> 
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              
          </div>
       
    </div>
  
   
     @include('admin.adminscript')
  
  </body>
</html>