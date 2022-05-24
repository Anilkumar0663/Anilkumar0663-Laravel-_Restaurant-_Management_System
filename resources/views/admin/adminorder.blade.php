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
   
  </head>

  <body>
   
    <div class="container-scroller">     
    
        @include('admin.navbar')     
    </div>

 <div class="container" style="margin-top: -600px; margin-left:220px">
    <div style="position: relative; top: 60px; right: -362px ">
      <h1>Order Record</h1>
      <form action="{{url('/search')}}" method="post">
         
        <input type="text" name="search" style="color:black" placeholder="search by name" >
        <button class="btn btn-primary">Search</button>
      </form>
        <table  bgcolor="#bab2bf" border="10px  margin-top: 59px;">
            <thead>
             
                <th style="padding: 30px;color:black">Name</th>
                <th style="padding: 30px;color:black">Food Name</th>
                <th style="padding: 30px;color:black">Price</th>
                <th style="padding: 30px;color:black">Quantity</th>
                <th style="padding: 30px;color:black">Phone</th>
                <th style="padding: 30px;color:black">Address</th>
              
        
          
               

            </thead>
            <tbody>
                
                    
               @foreach ($data as $item)
                   
              
                <tr>
                    <td style="padding: 30px; color:blue">{{$item->name}}</td>
                    <td style="padding: 30px; color:blue">{{$item->foodname}}</td>
                    <td style="padding: 30px; color:blue">{{$item->price}}</td>
                    <td style="padding: 30px; color:blue">{{$item->quantity}}</td>
                    <td style="padding: 30px; color:blue">{{$item->phone}}</td>
                    <td style="padding: 30px; color:blue">{{$item->address}}</td>
                     
                   
                   
                    </tr>
            
                
                 @endforeach
                  
            </tbody>
        </table>
     @include('admin.adminscript')
   </div>
  </body>
</html>