@extends('layouts.app')

@section('content')

<center>    
        <div class="row mt-3">
            @foreach($food as $food)

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="/storage/image/{{$food->Image}}" class="img-fluid" alt=""></center> 
                                    <div class="card-body">
                                        <h3 class="card-title">{{$food->Name}}</h3>
                                        
                                        <div class="row ml-5">
                                        <center>
                                        <a href="{{ route('menudestroy', $food->id) }}" class="btn btn-danger">Delete</a>&nbsp;
                                        <a href="{{ route('edit', $food->id) }}" class="btn btn-primary">Edit</a>
                                        </center>
                                        </div>
                                       

                                    </div>
                            </div>
                        </div>
             @endforeach         

        </div>
</center>


@endsection
