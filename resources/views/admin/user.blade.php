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
   
  </head>

  <body>
    <div class="container-scroller">     
        @include('admin.navbar')
        <div style="position: relative; top: 60px; right: -150px ">
        <table  bgcolor="#bab2bf" border="10px  margin-top: 59px;">
            <thead>
                <th style="padding: 30px;color:black">Name</th>
                <th style="padding: 30px;color:black">lastname</th>
                <th style="padding: 30px;color:black">Email</th>
                <th style="padding: 30px;color:black">Date Added</th>
                <th style="padding: 30px;color:black">update</th>
                <th style="padding: 30px;color:black">Action</th>
               

            </thead>
            <tbody>
                @foreach ($data as $user)
                    
               @if($user->usertype == '0') 
                <tr>
                    <td style="padding: 30px; color:blue">{{$user->name}}</td>
                    <td style="padding: 30px; color:blue">{{$user->name}}</td>
                    <td style="padding: 30px; color:blue">{{$user->email}}</td>
                    <td style="padding: 30px; color:blue">{{$user->created_at}}</td>
                    <td style="padding: 30px; color:blue">{{$user->updated_at}}</td>
                    <td style="padding: 30px; color:red;"><a href="{{url('/deleteuser',$user->id)}}" ><button class="btn btn-danger"> Delete<button></a></td>
                 </tr>
               @endif
                
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    
     @include('admin.adminscript')
  
  </body>
</html>