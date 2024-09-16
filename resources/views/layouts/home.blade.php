<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">   
    {{-- <link rel="stylesheet" href="assests/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{asset("asset/css/starbucks2.css")}}">
    @yield ("links")
    {{-- <link rel="stylesheet" href="{{asset("asset/css/home.css")}}">
    <link rel="stylesheet" href="{{asset("asset/js/home.js")}}"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script> --}}
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    a{
        color:white;
        text-decoration: none;
       
    }
   
</style>

<body>
  <nav class="navbar navbar-expand-md bg-white  p-2">
    <div class="navbar-brand justify-content-start ms-5">
        <img src="{{asset("asset/images/logo.png")}}"  class="imgs"> 
     </div>
        <button class="navbar-toggler " data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav navbar-collapse collapse justify-content-end me-5 " id="menu">
            <li class="nav-item"><a class="nav-link " href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link " href="#shop">Shop</a></li>
            <li class="nav-item"><a class="nav-link "  href="#app">app</a></li>
            <li class="nav-item"><a class="nav-link "  href="#about">about</a></li>
            <li class="nav-item"><a class="nav-link "  href="#contact">contact</a></li>
            @if (!Session::has("loginid"))
            <div class="icon d-flex w-100 justify-content-end">
             <li class="nav-item ">
            <a class="nav-link fs-6" id="link" href="/login">login</a>
            </li>  
            <li class="nav-item ">
                <a class="nav-link fs-6" id="link" href="/signup">sign up</a>
            </li>
            </div>
            
             
           
            @else
            @if (Session::has("loginAdminid"))
            <li class="nav-item ">
             <a class="nav-link fs-6" id="link" href="/dashbourd">Dashbourd</a>
         </li>
         @elseif (Session::has("technicalid"))
         <li class="nav-item ">
           <a class="nav-link fs-6" id="link" href="/dashbourd">techDashbourd</a>
       </li>
              
            @endif
             
             <li class="nav-item">
             <a class="nav-link fs-6" id="link" href="/logout">logout</a>
            </li>
          
           </ul>
       </div>
         <div class="icon justify-content-end">
        <a style="color: #10437A;" class="fs-6 ms-5" href="/profile">profile </a>
        <i class="bi-person ms-2 fs-4"></i>


    </div>

           @endif

        </ul>
  
</nav>

 {{-- <nav class="navbar navbar-expand-lg navbar-light  bg-white  sticky-top p-0">
    <div class="container-fluid">

        <a class="navbar-brand justify-content-start p-0 m-0">
            <img src="{{asset("asset/images/logo.png")}}" alt="logo" style="width: 30px;height: 40px;"> <span
                class="m-auto">IT</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-6" id="active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6" id="link" href="#faqs">FAQS</a>
                </li>

             </li>
               
             @if (!Session::has("loginid"))
             <div class="icon d-flex w-100 justify-content-end">
              <li class="nav-item ">
             <a class="nav-link fs-6" id="link" href="/login">login</a>
             </li>  
             <li class="nav-item ">
                 <a class="nav-link fs-6" id="link" href="/signup">sign up</a>
             </li>
             </div>
             
              
            
             @else
             @if (Session::has("loginAdminid"))
             <li class="nav-item ">
              <a class="nav-link fs-6" id="link" href="/dashbourd">Dashbourd</a>
          </li>
          @elseif (Session::has("technicalid"))
          <li class="nav-item ">
            <a class="nav-link fs-6" id="link" href="/dashbourd">techDashbourd</a>
        </li>
               
             @endif
              
              <li class="nav-item">
              <a class="nav-link fs-6" id="link" href="/logout">logout</a>
             </li>
           
            </ul>
        </div>
          <div class="icon justify-content-end">
         <a style="color: #10437A;" class="fs-6 ms-5" href="/profile">profile </a>
         <i class="bi-person ms-2 fs-4"></i>


     </div>

            @endif
           

         
        </div>
       
    </div>
</nav>  --}}

@yield('text')
  
@yield("info")

@yield("categories")
@yield("FQAS")


<div class="container-fluid px-4 pt-4 mt-5   text-light" style=" height:max-content;background-color: rgb(1, 98, 50)"> 
    <div class="row row-cols-4 justify-content-centern ">
      <div class="col">
        <a class="linkfooter" href="#">
          <span>
            <img src="universitylogo.jpg" style="height:40px ; width:55px ;">

          </span>
          <span class="fs-5">ACE</span>
        </a>
        <p class="mt-3"> Academic Center of Excellence
        </p>
      </div>
      <div class="col">
        <span class="fs-5">Quick Links</span>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">Home</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">FAQS</a>
        </div>
       
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/profile" class="linkfooter">Profile</a>
        </div>


      </div>

      <div class="col">
        <span class="fs-5">Extra Links</span>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">Home</a>
        </div>
       
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">FAQS</a>
        </div>
        
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/profile" class="linkfooter"> Profile</a>
        </div>

      </div>
      <div class="col">
        <span class="fs-5">Contact Info</span>
        <div class="mt-2 links">
          <i class="bi bi-telephone-fill fs-5"></i>
          <a class="linkfooter" >+201559116470</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-envelope-fill fs-5"></i>
          <a class="linkfooter" href="https://gmail.com/">nada@gmail.com</a>
        </div>
      </div>


    </div>
    <div class="row justify-content-center ">
      <div class=" fs-4 d-flex gap-3 mt-4 justify-content-center">
        <a href="https://www.facebook.com/profile.php?id=61556673841264&mibextid=ZbWKwL" class="linkfooteri"><i class="bi-facebook"></i></a>
        <a href="https://twitter.com/" class="linkfooteri"><i class="bi-twitter "></i></a>
        <a href="https://www.instagram.com/" class="linkfooteri"><i class="bi-instagram "></i></a>
        <a href="https://www.linkedin.com/" class="linkfooteri"> <i class="bi bi-linkedin"></i></a>
        

      </div>
    </div>
    <div class="row text-center mt-2 ">
      <p>Create by ENG: hours security developer</p>

    </div>
</div>
 @yield("script")

  <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
  {{-- <script  src="{{asset("asset/js/home.js")}}"></script> --}}
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script> --}}
  <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>

</body>
</html>
 
   
