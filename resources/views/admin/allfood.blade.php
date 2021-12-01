@extends('layouts.app')

@section('content')

<center>    
@if(count($food) > 0)
        <div class="row mt-3">
            @foreach($food as $food)

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="/storage/image/{{$food->Image}}" class="img-fluid" alt=""></center> 
                                    <div class="card-body">
                                        <h3 class="card-title">{{$food->Name}}</h3>
                                        <div class="row ml-5">
                                        <a href="{{ route('fooddestroy', $food->id) }}" class="btn btn-danger">Delete</a>&nbsp;&nbsp;
                                        <a href="{{ route('editfood', $food->id) }}" class="btn btn-primary">Edit</a>


                                        </div>
                                       

                                    </div>
                            </div>
                        </div>
             @endforeach         

        </div>
        @else
                            <p>Nothing here yet</p>
         @endif
</center>


@endsection
