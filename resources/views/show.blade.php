@extends('layouts.app')

@section('content')


<center>
  

@if(count($food) > 0)
        <div class="row mt-3">
            @foreach($food as $food)

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="/storage/image/{{$food->Image}}" class="img-fluid" alt={{$food->Name}}></center> 
                                    <div class="card-body">
                                        <h3 class="card-title">{{$food->Name}}</h3>
                                        <h5 class="card-title">Ksh :{{$food->Price}}</h5>

                                      
                                         @if( $cart->where('id', $food->id)->count())
                                         <div class="row ml-5">
                                         <a class="btn btn-success" href="{{ route('home')}}">Go Back</a>

                                         <a class="btn btn-primary ml-3" href="{{ route('checkout')}}">Check Out</a>


                                         </div>
                                         @else
                                        

                                                                              
                                            <form action="{{ route('addToCart')}}" method="get">
                                                @csrf
                                                <div class="row ml-5">
                                                <input type="hidden" name="product_id" value="{{ $food->id}}">

                                                    <input class="form-control" type="number" name="quantity" value="1" min="1" style="width: 100px;">
                                                    &nbsp;&nbsp; <button type="submit" class="btn btn-success">Add to cart</a>

                                                </div>
                                            </form>
                                   @endif
                                                                                
                                       

                                    </div>
                            </div>
                        </div>
             @endforeach         

        </div>

        @else
                
                <h3>Nothing here yet</h3>
              
                            
            @endif



</center>



@endsection
