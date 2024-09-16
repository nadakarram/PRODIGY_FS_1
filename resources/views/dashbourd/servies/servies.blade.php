@extends('layouts.dashbourd')
@section('page')
<div class="container-fliud mt-3">
    <h2 class="text-center " style="color:#36205f">All product </h2>
    <a class="btn btn-outline-success mt-3" style="" href="/showserviesadd">Add product </a>
  
    <table class="mt-2 table">
        <thead>
            <tr class="text-center text-light" style="background-color:rgb(1, 73, 1)">
                <th> id</th> 
                <th> photo</th>
                <th>product name</th>
                <th> State</th>
               

                {{-- <th>feild_desc</th> --}}
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feilds as $feild)
            <tr class="text-center">
                <th>{{$feild->id}}</th>
               
                <td><img src="{{$feild->photo}}" alt="" style="width:70px;height: 70px;border-radius: 50%"></td>
                
                <td>{{$feild->name}}</td>
                <td>{{$feild->state}}</td>
               
                <td>
                    <form action="/deleteservies/{{$feild->id}}" method="post" class="d-inline">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-outline-success w-50 h-50"><i class="bi bi-trash3 fs-5"></i></button>
                    </form>
                    <a href="/showserviesedit/{{$feild->id}}" class="text-center  btn btn-outline-success w-50 h-50 mt-1"><i class="fa fa-edit fs-5 ms-1"></i></a>

            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        
        
            
      
 

</div>
@endsection