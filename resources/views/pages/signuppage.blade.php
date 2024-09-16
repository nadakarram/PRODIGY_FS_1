<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title></title>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/style.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container ">
        <div class="row row-cols-3 justify-content-center align-items-center" style="height:650px">
            {{-- image --}}
            <div class=" h-50 w-25 w-0">
                <img src="{{asset("asset/images/logo.png")}}" class="w-100 h-100">
            </div>

            <div class=" w-75 w-sm-100  h-100 d-flex justify-content-center align-content-center align-items-center">
                <div class="container px-5 py-5 rounded-3 shadow w-100" style="">
                    <div class="form" >
                        <h3 class=" fw-bold text-dark">Let's Get Started 🚀</h3>
                    <form class="mt-4" action="/regester" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row mt-2">
                            {{-- email --}}
                            <div class="col-6 ">
                                <label for="inputEmail4" class="form-label ">Name</label>
                                <input type="text" class="form-control" name="name" value="{{old("name")}}">
                                <span class="text-danger">
                                @error("name")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                               
                                @enderror
                                </span>
          
                            </div>
                            {{-- phone number --}}
                            <div class="col-6 ">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" value="{{old("phone_number")}}">
                                <span class="text-danger">
                                @error("phone_number")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                
                                @enderror
                                </span>
                               
                            </div>  
                        </div>
                        <div class="row mt-2">
                            {{-- email --}}
                            <div class="col-6">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{old("email")}}" placeholder="abc@gmail.com">
                                <span class="text-danger"> 
                                @error("email")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                   
                                @enderror
                                </span>
                                 
                            </div>
                              {{-- password --}}
                            <div class=" col-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{old("password")}}" placeholder="Password">
                                @error("password") 
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                
                                @enderror
                               
                            </div>
                        </div>
                        {{-- work for --}}
                        <div class="row mt-2">
                            <div class="col-3"> <label for="">work for</label> </div>
                            {{-- {{old("work_for")}}
                            @if (old("work_for")=="")
                           {{"company"}}
                            @else
                            {{old("work_for")}}
                                
                            @endif --}}
                            <div class="col-3"><input type="radio" name="work_for" class="form-check-input" value="company" {{old("work_for")=="company"? 'checked' :""}}  id="company"> company</div>
                            <div class="col-3"><input type="radio" name="work_for" class="form-check-input" value="own busniss" id="busniss" {{old("work_for")=="own busniss"? 'checked' :""}}> own busniss</div>
                            <div class="col-3"><input type="radio" name="work_for" class="form-check-input" value="other" id="other"  {{old("work_for")=="other"? 'checked' :""}}>other</div>


                        </div>
                        {{-- company name --}}
                        <div class="row mt-2" id="company_name">
                            <div class="col-12 ">
                                <label for="company name" class="form-label ">Company Name</label>
                                <input type="text" class="form-control" name="company_name" value=" {{old("company_name")}}">
                                <span class="text-danger">
                                @error("company_name")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                               
                                @enderror
                                </span>
          
                            </div>

                        </div>
                        {{-- user adress --}}
                        <div class="row mt-2">
                            
                            <div class="col-12">
                                <label for="" class="form-label">Adress</label>
                                <input type="text" class="form-control" name="user_adress" value="{{old("user_adress")}}" placeholder="13 street between .. and..">
                                <span class="text-danger"> 
                                @error("user_adress")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                   
                                @enderror
                                </span>
                                 
                            </div>
                       
                        </div>
                        {{-- image --}}
                        <div class="row mt-2">
                            
                            <div class="col-12">
                                <label for="" class="form-label">image</label>
                                <input type="file" class="form-control" name="photo" value="{{old("photo")}}" >
                                <span class="text-danger"> 
                                @error("photo")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                   
                                @enderror
                                </span>
                                 
                            </div>
                       
                        </div>


                            
                          
                            
                        <button type="submit" class="btn btn-success text-light w-100 mt-3" style="">Continue</button>
                    </form>
                    {{-- login --}}
                        <div class="mt-2 d-flex  justify-content-center">
                            <p>Do have an account?</p>
                            <a href="/login" class="text-success">login</a>
                        </div>
                  
                        

                    </div>

                </div>



            </div>
            
        </div>

    </div>
<script src="{{asset("asset/js/home.js")}}"></script>
  {{-- <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script> --}}
  
  <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>

</body>
</html>
 