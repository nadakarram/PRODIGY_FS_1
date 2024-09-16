<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title></title>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container ">
        <div class="row row-cols-3" style="height:650px">
            
            <div class=" w-50 h-100 d-flex justify-content-center align-content-center align-items-center">
                <div class="container px-5 py-5 rounded-3 shadow" style="">
                    <div class="form" >

                        <h3 class="display-6 fw-bold text-dark">Welcome technical 👋</h3>
                        
                        <form class="mt-4" action="/technicallogincheck" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">What is your e-mail?</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{old("email")}}">
                                @error('email')
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger"> {{$message}}</p>   
                                @enderror
                                @if (session("email_faild"))
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{session("email_faild")}}</p>

                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Enter your password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name='password' value="{{old("password")}}">
                                @error('password')
                                 <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                    
                                @enderror
                                @if (session("password_faild"))
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{ session("password_faild")}}</p>
                                    
                                @endif
                            </div>
                           
                            
                            <button type="submit" class="btn btn-success text-light w-100 mt-3" style="">Continue</button>
                        </form>
                        
                        <div class="mt-1 d-flex  justify-content-center">
                            <p>you can </p>
                            <a href="/adminlogin" class="text-decoration-underline text-success"> join as admin</a> 
                        </div>

                    </div>

                </div>



            </div>
            <div class=" h-100 w-50 mt-5">
                <img src="{{asset("asset/images/home.png")}}" class="w-100 h-75">
            </div>
        </div>

    </div>

  <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>

  <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>

</body>
</html>
 