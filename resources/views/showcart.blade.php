<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
    <style>
      .container-scroller{
        overflow: auto;
      }
    </style>
   

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-scroller">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>   
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 


                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                Cart[{{$count}}]
                                 @endauth    
                                 @guest
                                 Cart[0]                              
                                 @endguest                      
                            </a></li> 
                            <li>  @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <li><x-app-layout>
   
                                        </x-app-layout>
                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif</li>
                        </ul>        
                        <a class='menu-trigger'>
                          
                        </a>
                        <!-- ***** Menu End ***** -->
                        <div style="position: relative; top: 60px; right: -362px">
                            <table  bgcolor="#bab2bf" border="10px  margin-top: 59px">
                                <thead>
                                    <th style="padding: 30px;color:black">Food Name</th>
                                    <th style="padding: 30px;color:black">Price</th>
                                    <th style="padding: 30px;color:black">Quantity</th>
                                    <th style="padding: 30px;color:black">Date Added</th>
                                    <th style="padding: 30px;color:black">update</th>
                                    <th style="padding: 30px;color:black">Action</th>
                                   
                    
                                </thead>
                                <tbody>
                                 <form  action="{{url('confirmorder')}}" method="post"  enctype="multipart/form-data">
                                    @csrf 
                                   @foreach ($data as $item)
    
                                    <tr>
                                        <td style="padding: 30px; color:blue">
                                            <input type="text" name="foodname[]" value="{{$item->title}}" hidden="">
                                            {{$item->title}}</td>
                                        <td style="padding: 30px; color:blue">
                                            <input type="text" name="price[]" value="{{$item->price}}" hidden="">
                                            {{$item->price}}</td>
                                        <td style="padding: 30px; color:blue">
                                            <input type="text" name="quantity[]" value="{{$item->quantity}}" hidden="">
                                            {{$item->quantity}}</td>
                                        <td style="padding: 30px; color:blue">{{$item->created_at}}</td>
                                        <td style="padding: 30px; color:blue">{{$item->updated_at}}</td>
                                       
                                        </tr>
                                
                                    
                                     @endforeach
                                     @foreach($data2 as $data2)
                                     <tr style="position: relative; top: -100px; right: -800px">
                                     <td style="padding: 30px"><a href="{{url('/remove',$data2->id)}}" ><button class="btn btn-warning"> Remove<button></a></td>
                                 </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <div align="center" style="padding: 10px">
                                <button id="order" class="btn btn-primary">Order Now</button>
                             </div>
                             <div id="appear" align="center" style="padding: 10px;display:none">
                           
                               
                                <h1>Fill Required  Field</h1>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input style="color:black" type="text" name="name" class="form-control" id="exampleInputEmail1"   placeholder="Enter Name" required>
                                  
                                </div>
                                  <div class="form-group co">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input style="color:black" type="text" name="phone" class="form-control colour" id="exampleInputEmail1"   placeholder="Enter Phone no." required>
                                  
                                </div>
                                
                                  <div class="form-group co">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input style="color:black" type="text" name="address" class="form-control colour" id="exampleInputEmail1"   placeholder="Enter Address" required>                                 
                                </div>
                               
                                <button  class="btn btn-primary">Submit</button>
                                <button id="close" class="btn btn-danger">Cancal</button>
                              </form>
                            </div>
                              
                        </div>

                      
    <!-- jQuery -->
    <script type="text/javascript">
    $("#order").click(
        function(){
            $("#appear").show();
        } 
    );
    $("#close").click(
        function(){
            $("#appear").hide();
        } 
    );
   

    </script>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>


<br>
<br>