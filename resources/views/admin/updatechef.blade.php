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
            <form  action="{{url('/updatedchef',$data->id)}}" method="post"  enctype="multipart/form-data">
                @csrf 
                <h1>Update Chef Detail</h1>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input style="color:white" type="text" name="name" class="form-control" id="exampleInputEmail1"   placeholder="Enter Name" value="{{$data->name}}">
                  
                </div>
                  <div class="form-group co">
                  <label for="exampleInputEmail1">Speciality</label>
                  <input style="color:white" type="text" name="speciality" class="form-control colour" id="exampleInputEmail1"   placeholder="Enter Speciality" value="{{$data->speciality}}">
                  
                </div>
                <div class="form-group">
                      <div class="form-group co">
                          <label for="exampleInputEmail1">Old Image</label>
                          <img src="/chefsimage/{{$data->image}}" height="100" width="100" alt="">                       
                       </div>
                     <label for="exampleInputPassword1">Image</label>
                     <input style="color:white"  name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="image" value="{{$data->image}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              
          </div>
       
    </div>
  
   
     @include('admin.adminscript')
  
  </body>
</html>