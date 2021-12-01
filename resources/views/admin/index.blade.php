@extends('layouts.app')

@section('content')



<center>
<div class="row mt-3">

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/addcat.jpg" class="img-fluid" alt="ishi"></center> 
                                    <div class="card-body">
                                        <h4 class="card-title">Food categories</h4>
                                        <a href="../admin/create" class="btn btn-success">Add Category</a>
                                    </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/addcatt.png" class="img-fluid" alt="ishi"></center> 
                                    <div class="card-body">
                                        <h4 class="card-title">Food</h4>
                                        <a href="../admin/createfood" class="btn btn-success">Add Food Types</a>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/images.jpg" class="img-fluid" alt="ishi"></center> 
                                    <div class="card-body">
                                        <h4 class="card-title">Food categories</h4>
                                        <a href="../admin/allcat" class="btn btn-success">View All Categories</a>
                                    </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/im1.jpg" class="img-fluid" alt="ishi"></center> 
                                    <div class="card-body">
                                        <h4 class="card-title">Food</h4>
                                        <a href="../admin/allfood" class="btn btn-success">View All Food Types</a>
                                    </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/pending.jpg" class="img-fluid" alt="ishi"></center> 
                                    <div class="card-body">
                                        <h4 class="card-title">Pending Food Orders</h4>
                                        <a href="{{route('pendingorders')}}" class="btn btn-success">View Pending</a>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="card online-course-card"><br>
                            <center>  <img style="width:200px; height:150px; border-radius: 50px;" src="storage/image/approved.png" class="img-fluid" alt="ishi"></center> 
                                    <div class="card-body">
                                        <h4 class="card-title">Approved Food Orders</h4>
                                        <a href="{{route('approved')}}" class="btn btn-success">View Approved</a>
                                    </div>
                            </div>
                        </div>


                    
        </div>

</center>




@endsection
