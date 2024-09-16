@extends('layouts.home')

@section('text')
<div class="container-fliud mb-5 bg-body-tertiary d-flex justify-content-center flex-column align-items-center align-content-center" style="height:500px ">
    <div style="height:200px" class="p-0 me-5  d-flex flex-column justify-content-center  align-items-center">
       <div class="img h-100 w-50 p-0 me-4"><img src="{{$user->photo}}" class="h-100 rounded-circle border-4 shadow" style="width: 200px;" ></div>
    

    </div>
    
    <div class="d-flex justify-content-center align-items-center flex-column mt-3" style="height:200px">
      <!-- Button trigger modal -->
      {{-- <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
      change image
      </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">change image</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/editimage" method="post" enctype="multipart/form-data">
          @method("PUT")
          <label for="">Change image</label>
        <input type="text" name="photo">
        <input type="submit" class="btn btn-success" value="Save changes">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> --}}
{{-- <form action="/editimage" method="post" enctype="multipart/form-data">

  <label for="">Change image</label>
<input type="file" name="photo">
<input type="submit" class="btn btn-success" value="Save changes">
</form> --}}
      <span class="fs-4 mt-3" style="color:#000000">{{$user->name}} </span> 
            
            <span class="fs-4 mt-3"style="color: black">your email : {{$user->email;}}</span> 
            <span class="fs-4 mt-3"style="color: black">your phone number :{{$user->phone_number}}</span>  <br>
            @if (!(session::has("loginAdminid")||session::has("technicalid")))
                  <div class="d-flex">
                  <button class="btn btn2 mt-4" id="show_p_comp">see your notfications</button> 
                  <button class="btn btn2 mt-4 ms-2" id="show_notification"><i class="bi bi-bell fs-5"></i></button>
            </div>
          
            @endif
          
    </div>
</div> 

@endsection
@section('script')
    <script  src="{{asset("asset/js/bootstrap.min.js")}}"></script>
@endsection