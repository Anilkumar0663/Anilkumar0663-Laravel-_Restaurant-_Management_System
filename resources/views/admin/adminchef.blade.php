<div class="text-right">
    <x-app-layout>
      
   </x-app-layout></div>   

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
          <form method="post" action="{{url('/uploadchef')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input style="color:white" type="text" name="name" class="form-control" id="exampleInputEmail1"   placeholder="Enter Name">
              
            </div>
              <div class="form-group co">
              <label for="exampleInputEmail1">Speciality</label>
              <input style="color:white" type="text" name="speciality" class="form-control colour" id="exampleInputEmail1"   placeholder="Enter Speciality">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Image</label>
              <input style="color:white"  name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <table  bgcolor="#bab2bf" border="10px  margin-top: 59px;">
            <tr>
               <th style="color:black">Name</th>
               <th style="color:black">Speciality</th>
               <th style="color:black">Date Added</th>
               <th style="color:black">Update</th>
               <th style="color:black">Image</th>
               <th style="color:black">Action</th>
               <th style="color:black">Action2</th>
              </tr>
   
          
               
               @foreach($data as $data)   
             
               <tr>
                   <td style="padding: 5px; color:blue">{{$data->name}}</td>
                   <td style="padding: 5px; color:blue">{{$data->speciality}}</td>
                   <td style="padding: 5px; color:blue">{{$data->created_at}}</td>
                   <td style="padding: 5px; color:blue">{{$data->updated_at}}</td>
                   <td style="padding: 5px; color:blue"><img width="50" height="60" src="/chefsimage/{{$data->image}}"></td>
                   <td style="padding: 5px; color:red;"><a href="{{url('/deletechef',$data->id)}}" ><button class="btn btn-danger"> Delete<button></a></td>
                   <td style="padding: 5px; color:red;"><a href="{{url('/updatechef',$data->id)}}" ><button class="btn btn-primary"> Update<button></a></td>
                </tr>
             
             @endforeach  
               
            
       </table>
        </div>

      
    </div>
     
     @include('admin.adminscript')
  
  </body>
</html>