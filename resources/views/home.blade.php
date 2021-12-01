@extends('layouts.app')

@section('content')

<center>    
        <div class="row mt-3">
            @foreach($food as $food)

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/{{$food->Image}}" class="img-fluid" alt=""></center> 
                                    <div class="card-body">
                                        <h3 class="card-title">{{$food->Name}}</h3>
                                        <a href="{{ route('show', $food->id) }}" class="btn btn-success">View Category</a>
                                       

                                    </div>
                            </div>
                        </div>
             @endforeach         

        </div>
</center>


@endsection
