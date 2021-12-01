@extends('layouts.app')

@section('content')


<center><h4>Choose a payment option</h4></center>

@if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
  @endif

<br><br>
<center>
<div class="card-columns">
    
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/storage/image/mpesa.png" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">MPESA </h5><hr>
        <p class="card-text">Use Safaricom M-pesa to make payment of your order.Click on pay Now and follow the prompts</p>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm" data-whatever="@getbootstrap">Pay Now</a>
    </div>
    </div>
    

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/storage/image/visa.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Bank Card</h5><hr>
        <p class="card-text">Use your Visa/Master Card to make payment through bank.</p>
        <a href="#" class="btn btn-primary disabled"  data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Pay Now</a>
    </div>
    </div>

    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/storage/image/cod1.jpg" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Pay on Delivery</h5><hr>
        <p class="card-text">Pay for the items when they are delivered at your doorstep.</p>
        <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#podv" data-whatever="@getbootstrap">Pay Now</a>
    </div>
    
    </div>
  
  


</div>
</center>


<div class="modal fade" id="podv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" href="#" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recipient Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action = "{{ route('savecartorders') }}" method = "post"  enctype="multipart/form-data">
      @csrf
      @foreach($cart as $cart)
            <input type="hidden" name="pname[]" value="{{$cart->name}}" class="form-control">
            <input type="hidden" name="pprice[]" value="{{$cart->price}}" class="form-control">
            <input type="hidden" name="pqty[]" value="{{$cart->qty}}" class="form-control">

      @endforeach      
          <input type="hidden" name="popt" value="Pay On Delivery" class="form-control">

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Recipient Name:</label>


              @guest
                            @if (Route::has('login'))
                            <input type="text" value="" name="rName"  placeholder="Your Name" class="form-control" id="recipient-name">

                            @endif          

                        @else
                          <input type="text" value=" {{ Auth::user()->name }}" name="rName"  class="form-control" id="recipient-name">

                            
                        @endguest
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Phone Number:</label>
              <input type="text"  class="form-control" name="rphone" id="recipient-phone">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Location:</label>
              <input type="text"  class="form-control" name="rlocation" id="recipient-loc">
            </div>
            
        <!-- </form> -->
        <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </div>
     

</form>
    </div>
  </div>
</div>





<!-- mpesa modal -->

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" href="#"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">M-Pesa Payment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
      <div class="modal-body mx-1">
      <form action = "{{ route('mpesa1') }}" method = "post"  enctype="multipart/form-data">
      @csrf 
                <div class="md-form mb-2">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong"  data-success="right" for="defaultForm-email">Amount to pay in Ksh</label>

                    <?php
                    // what you want is $ret[0]
                        $ret = explode('.', $carttotal);
                       

                        ?>
                    <input readonly value="<?php  echo $ret[0]; ?>" name="amount" id="amount" class="form-control validate">
                </div>

                <div class="md-form mb-2">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong"  data-success="right" for="defaultForm-email">Phone number to pay</label>

                    <input name="phone" id="phone" class="form-control validate">
                </div>
              

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#loadForm">Pay Now</button>
                     </div>
        </form>

               
    </div>
  </div>
</div>


<!-- loading modal -->


<center>
<div class="modal fade" id="loadForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false" href="#"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">M-Pesa Payment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <br>                      
<center>
                            <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                            </div><br><br>
                            <h5>Waiting for Payment</h5>
</center>
                    <hr>
            
            <h5>Expected Amount {{$carttotal}}</h5>
      
    </div>
  </div>
</div>




<!-- pay on delivery modal -->






</center>


@endsection
