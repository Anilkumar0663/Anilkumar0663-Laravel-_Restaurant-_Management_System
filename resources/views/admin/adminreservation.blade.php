<div class="text-right">
    <x-app-layout>
      
   </x-app-layout></div>   

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reservation</title>
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
    

 
    <div style="position: relative; top: 60px">
      <table  bgcolor="#bab2bf" border="10px  margin-top: 59px;">
        <tr>
           <th style="padding:10px; color:black">Name</th>
           <th style="padding:10px; color:black">Email</th>
           <th style="padding:10px; color:black">Phone</th>
           <th style="padding:10px; color:black">Guest</th>
           <th style="padding:10px; color:black">Date</th>
           <th style="padding:10px; color:black">Time</th>
           <th style="padding:10px; color:black">Message</th>
           <th style="padding:10px; color:black">Date Added</th>
           <th style="padding:10px; color:black">update</th>
         </tr>

      
           
           @foreach($data as $data)   
         
          <tr>
              <td style=" padding:29px; color:blue">{{$data->name}}</td>
              <td style=" padding:29px; color:blue">{{$data->email}}</td>
              <td style=" padding:29px; color:blue">{{$data->phone}}</td>
              <td style=" padding:29px; color:blue">{{$data->guest}}</td>
              <td style=" padding:29px; color:blue">{{$data->date}}</td>
              <td style=" padding:29px; color:blue">{{$data->time}}</td>
              <td style=" padding:29px; color:blue">{{$data->message}}</td>
              <td style=" padding:29px; color:blue">{{$data->created_at}}</td>
              <td style=" padding:29px; color:blue">{{$data->updated_at}}</td>
              
            
          </tr>
         
         @endforeach  
           
        
     </table>
  
    </div>
     @include('admin.adminscript')
   
  </div>
  </body>
</html>