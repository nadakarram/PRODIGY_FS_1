<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    {{-- <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" /> --}}
    <!-- bootstrap icon  -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-content-center align-items-center" style="background:linear-gradient(green,white);height:700px;">
        <div class="form bg-white p-5 rounded-4 shadow mt-5" style="width: 700px">
            <h3 class=" text-center" style="color: green">Add Servies</h3>
            
            
                <form class="row" action="/addservies" method="POST" enctype="multipart/form-data">
                
                    @csrf
                    <div class="col-12 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">Servies Name</label>
                      <input type="text" class="form-control" name="name" value="{{old("name")}}">
                      <span class="text-danger">
                        @error('name')
                        {{$message}}
                            
                        @enderror
                      </span>
                      
                          
                     

                    </div>
                    

                    <div class="col-12 mt-2">
                      <label for="" class="form-label">Servies Description</label>
                      <textarea type="text" class="form-control" name="desc" value="{{old("desc")}}"  placeholder="" cols="5" rows="5"></textarea>
                      <span class="text-danger">
                        @error('desc')
                        {{$message}}
                            
                        @enderror
                      </span>
                    </div>
                   
                    <div class="col-12 mt-2">
                        <label for="" class="form-label">Servies photo </label>
                        <input type="file" class="form-control" name="photo"  value="{{old("photo")}}">
                        <span class="text-danger">
                          @error('photo')
                          {{$message}}
                              
                          @enderror
                        </span>
                      </div>
                      <div class="col-md-6 mt-2">
                        <label for="" class="form-label">category</label>
                        <select name="category_id" id="" class="form-select">
                          @foreach ($categorys as $category)
                          <option value="{{$category->id}}" >{{$category->name}}</option>
                          @endforeach
  
                        </select>
                       
                      </div>
                    
                    <div class="col-12 mt-2">
                      <label for="" class="form-label" >State</label>
                       <br> 
                       <div class="d-block">
                           <input type="radio" name="state" value="Available" class="form-check-input " > Available 
                       </div>
                       <div class="d-block">
                        <input type="radio" name="state" value="not available" class="form-check-input " >Not Available 
                    </div>
                       
                        <input type="radio" name="state" value="Near" class="form-check-input"> Near will be available
                        
                      </div>
                      <span class="text-danger">
                        @error('state')
                        {{$message}}
                            
                        @enderror
                      </span>
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn-outline-success ">Add Servies</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    {{-- <script src="{{asset("asset/js/java.js")}}"></script> --}}
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>