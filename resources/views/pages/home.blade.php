@extends('layouts.home')
@section('title')
    home
@endsection
@section('link')

@endsection
@section('text')
<div class="container-fluid " id="home">
  <div class="row row-cols-2 align-items-center" style="height: 550px;">
      <div class="col-12 p-5  col-lg-6 col-md-6 col-sm-6">
          <h5 class="fs-6 text-uppercase fw-medium ">welcome to</h5>
          <h1 class="text-success fw-bolder starbuck" >Starbucks Coffee</h1>
         
          <h5 class="text-uppercase fw-semibold fs-3">free coffee is a <br> tap away</h5>
  
          <button class="btn btn-outline-dark rounded-pill ps-4 pe-4">join now</button>

      </div>
      <div class="col">
          <img src="{{asset("asset/images/home.png")}}" class="homeimg">
      </div>
  </div>


</div>
<div class="container-fluid text-center bg-light" id="shop">
  <h5 class="fs-6 text-uppercase fw-medium">SHOP NOW</h5>
  <h2 class="text-success fw-bolder text-uppercase " >shop coffee</h2>
  <div class="container">
      <div class="row align-items-center gap-3 row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-sm-2 justify-content-center row-cols-xl-3 " style="margin-top: 140px;">
          <div class="col bg-success text-center col1 rounded-2 mt-lg-5 mt-5 mt-md-5 mt-sm-5">
              <img src="{{asset("asset/images/shop1.png")}}" class="img1">
              <div style="margin-top: 90px;">
                  <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              </div>
              
              <h5 class="text-light">Starbucks Coffee</h5>
              <h5 class="text-light">$ 12.4</h5>
              <button class="btn btn-outline-light rounded-pill" >Order Now</button>


          </div>
          <div class="col bg-success text-center col1 rounded-2 mt-lg-5 mt-5 mt-md-5 mt-sm-5">
              <img src="{{asset("asset/images/shop2.png")}}" class="img2">
              <div style="margin-top: 90px;">
                  <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              </div>
              
              <h5 class="text-light">Starbucks Coffee</h5>
              <h5 class="text-light">$ 12.4</h5>
              <button class="btn btn-outline-light rounded-pill" >Order Now</button>


          </div>
          <div class="col bg-success text-center col1 rounded-2 mt-lg-5 mt-5 mt-md-5 mt-sm-5">
              <img src="{{asset("asset/images/shop3.png")}}" class="img1">
              <div style="margin-top: 90px;">
                  <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              <i class="bi bi-star-fill text-light"></i>
              </div>
              
              <h5 class="text-light">Starbucks Coffee</h5>
              <h5 class="text-light">$ 12.4</h5>
              <button class="btn btn-outline-light rounded-pill" >Order Now</button>


          </div>
      </div>

  </div>
  <h5 class="fs-6 text-uppercase fw-medium" style="margin-top: 70px;">GET NOW</h5>
  <h2 class="text-success fw-bolder text-uppercase " >order with uber eats</h2>

</div>


<div class="container-fluid bg-light mt-3 p-3 " id="app" style="height: 500px;">
  <h5 class="fs-6 text-uppercase fw-medium text-center">OUR APP</h5>
  <h2 class="text-success fw-bolder text-uppercase text-center" >DOWNLOAD APP</h2>
  <div class="container">
      <div class="row  row-cols-2" style="margin-top: 70px; " >
          <div class="col  ">
              <h3>Fall into an easier routine</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum doloribus eaque sed aperiam,<span class="sp1"> dolorem iusto quibusdam natus, laborum officia beatae, nemo ad expedita repudiandae eum! Id reiciendis alias nostrum laudantium?</span></p>
              <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ipsa voluptatem temporibus excepturi illo hic facere perspiciatis deleniti, dicta fugiat alias consequuntur cum reiciendis? Voluptatibus ea eveniet similique amet iusto?</p>

              

    <button class="btn btn-outline-dark rounded-pill" >Get App</button>
          </div>
          <div class="col  ">
              <img src="{{asset("asset/images/app.png")}}" class="w-100 ">



          </div>
          
          
          
          

</div>
</div>

</div>

{{-- <div class="container-fluid mt-3 p-3 w-100" id="about" style="height: 500px;">
  
  <div class="container">
      <div class="row  row-cols-2" style="margin-top: 70px; " >
           <div class="col  ">
              <img src="img/about.png" class="w-100 ">



          </div>
          
          <div class="col  ">
              <h3 class="text-success">50 years of serving communities</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum doloribus eaque sed aperiam,<span class="sp1">dolorem iusto quibusdam natus, laborum officia beatae, nemo ad expedita repudiandae eum! Id reiciendis alias nostrum laudantium?</span> </p>
              <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ipsa voluptatem temporibus excepturi illo hic facere perspiciatis deleniti, dicta fugiat alias consequuntur cum reiciendis? Voluptatibus ea eveniet similique amet iusto?</p>

              

    <button class="btn btn-outline-success rounded-pill" >learn more</button>
          </div>
         
          
          
          

</div>
</div>
</div> --}}

 
@endsection
@section('info')

<div class="container-fluid mt-3 p-3 w-100" id="about" style="height: 500px;">
  
  <div class="container">
      <div class="row  row-cols-2" style="margin-top: 70px; " >
           <div class="col  ">
              <img src="{{asset("asset/images/about.png")}}" class="w-100 ">



          </div>
          
          <div class="col  ">
              <h3 class="text-success">50 years of serving communities</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum doloribus eaque sed aperiam,<span class="sp1">dolorem iusto quibusdam natus, laborum officia beatae, nemo ad expedita repudiandae eum! Id reiciendis alias nostrum laudantium?</span> </p>
              <p class="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ipsa voluptatem temporibus excepturi illo hic facere perspiciatis deleniti, dicta fugiat alias consequuntur cum reiciendis? Voluptatibus ea eveniet similique amet iusto?</p>

              

    <button class="btn btn-outline-success rounded-pill" >learn more</button>
          </div>
         
          
          
          

</div>
</div>
</div>

@endsection

@section('categories')


 {{-- <div class="container-fluid mt-5">
     <h3 class="text-center " style="margin-top:auto " >Servies</h3>
    <span style="background-color:rgb(1, 98, 50);width:100px ;height:4px; border-radius:10%"></span>
  </div>
  <div class="container p-4"> 
    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-1 gap-4 justify-content-between align-items-center mt-5" style="height: max-content">
     
        @foreach ($feilds as $feild)
         <div class=" border-1  shadow rounded-3 h-100">
            <div class="row h-25 m-auto mt-3 justify-content-center" style="width:150px;height:170px;">
                <img src="{{asset($feild->photo)}}" class="w-100 h-100 rounded-circle">

            </div>
            <div class="row h-50 text-center text-dark">
                <h4 class="mt-2">{{$feild->name}}</h4>
                <p class="mt-2">{{$feild->desc}} this servies are {{$feild->state}} now !</p>
              
            </div>
            <div class="h-25 mt-1 text-center pb-4">
                <a class="btn btn-outline-dark" href="">Make Request</a>
            </div>
            


        </div> 
            
       @endforeach 
       
   </div>

</div>  --}}
    
@endsection
@section('FQAS')

@endsection
@section('script')
    
@endsection