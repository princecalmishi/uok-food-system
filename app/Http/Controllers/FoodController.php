<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\Orders;
use App\Models\Recipients;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
// use App\Models\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Route;
use PDF;

class FoodController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth')->except('index', 'shoppingcart', 'additem', 'addToCart');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $food = Food::all();

        // return view('home')->with('food', $food);
        $food = DB::table('food')->where('Menu_id', $id)->get();

        $cart = Cart::content();

        $carttotal =  Cart::total();      
      
          
        return view('show',compact('food', 'cart', 'carttotal'));
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request)
    {
        // $food = Food::find($id);

        // $oldCart = Session::has('cart') ? Session::get('cart') : null;

        // $cart = new Cart($oldCart);
        // $cart->add($food, $food->id);
        // $request->session()->put('cart', $cart);
        
        // // dd($request->session()->get('cart'));

        // // return redirect()->route('home')->with('success', 'Added to cart');
        // return redirect()->back()->with('success', 'Product added to cart successfully!');

        // // return view('show')->with('success', 'Added to cart');


        $food = Food::findorFail($request->input('product_id'));
        Cart::add(
            $food->id,
            $food->Name,
            $request->input(key: 'quantity'),
            $food->Price
        );
            // dd($request->session()->get('cart'));

         return redirect()->back()->with('success', 'Added to cart');

    }
    
    public function shoppingcart()
    {
        $cart = Cart::content();
        $carttotal =  Cart::total();
  
         return view('mycart', compact('cart', 'carttotal'));
    }

    public function dropItem($rowId)
    {
        Cart::remove($rowId);
        // return view('cart')->with('success', 'Removed from cart');
        return redirect()->back()->with('success', 'Removed from cart!');


        //  return redirect()->route('shoppingcart')->with('error', 'Removed from cart');

    }

    public function reduce($rowId)
    {
      
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);

        return redirect()->route('shoppingcart')->with('error', 'Reduced from cart');

    }

    public function additem($rowId)
    {
      

        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);

        return redirect()->route('shoppingcart')->with('success', 'Added to cart');

    }

    public function checkout()
    {

        if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() < 1){
            return redirect()->route('home')->with('Error', 'You have no items in your cart');
        }

        $cart = Cart::content();
        $carttotal =  Cart::total();
  
         return view('checkout', compact('cart', 'carttotal'));
    }

    
    public function mpesa1(Request $request){

        $id = Auth::id();
       
        //  $amount = session()->get('amount');
        //   $phone = $request->input('myphone');   
          $phone = $request->phone;  
         $amount = $request->amount;  


      
          
          	$numbers = explode("\n", str_replace("\r", "", $phone));
        	foreach ($numbers as $number) {
        		$msisdn = preg_replace('/^(?:\254|27|0)?/','254', $number);
        
        	
        		//insert into the database
        	}  



        $redirectUrl = 'https://digitalafrica.co.ke/mpesa/stk_initiate.php';

       $age = array("phone"=>$msisdn, "amt"=>$amount, "uid"=>$id);

        // echo json_encode($age);

       
        $url = $redirectUrl . '?' . http_build_query($age);

        $response = Http::get($url);

        // return redirect::away($url);
        // $notify[] = ['success', 'Payment request sent'];
        

        // return redirect()->route('user.cdeposit')->withNotify($notify);
        
        //  $rid = session()->get('amount');
      

       // return $response;
     
        sleep(30);
         return redirect()->route('autoact')->with('success', 'Payment Request sent');
        //  return redirect()->back()->with('success', 'Order placed successfully!');



    }

    public function savecartorders(Request $request)
    {
        $this->validate($request,[
            'rName' => 'required',
            'rphone' => 'required',
            'rlocation' => 'required',


        ]);
        
        $orders = Orders::all();
        $carttotal =  Cart::total();   
         

       $cart = Cart::content();
        $id = Auth::id();
        $batch = random_int(100000, 999999);

        $this->invoice($batch);



        foreach ($request->pname as $key=>$Name){

        $order = new Orders;    
        $order->ItemName = $Name;
        $order->ItemPrice = $request->pprice[$key];  
        $order->ItemQty = $request->pprice[$key];  
        $order->ItemPrice = $request->pqty[$key];  
        
        
        // $order->ItemName = $request->input('pname');
        // $order->ItemPrice = $request->input('pprice');
        // $order->ItemQty = $request->input('pqty');

        $order->RecName = $request->input('rName');
        $order->Phone = $request->input('rphone');
        $order->Location = $request->input('rlocation');
        $order->PayOpt = $request->input('popt');
        $order->Batch = $batch;
        $order->UserId =  $id = Auth::id();

        $order->save();
        }


        $rc = new Recipients;    
        $rc->UserId =  $id = Auth::id();
        $rc->Cname = $request->input('rName');
        $rc->Batch = $batch;

        $rc->save();        

        $rname = $request->input('rName');
        $rphone = $request->input('rphone');
        Cart::destroy();

        return view('invoice',compact('orders', 'cart', 'carttotal' , 'batch', 'rname', 'rphone'));
        //sleep(10);

    }

    public function savecartorders1(Request $request)
    {

      //these code saves only one row/one cart

        $this->validate($request,[
            'rName' => 'required',
            'rphone' => 'required',
            'rlocation' => 'required',


        ]);    
         

        $cart = Cart::content();
        $id = Auth::id();


        $order = new Orders;        
        $order->ItemName = $request->input('pname');
        $order->ItemPrice = $request->input('pprice');
        $order->ItemQty = $request->input('pqty');

        $order->RecName = $request->input('rName');
        $order->Phone = $request->input('rphone');
        $order->Location = $request->input('rlocation');
        $order->PayOpt = $request->input('popt');
        // $order->Status = $request->input('menu');
        $order->UserId =  $id = Auth::id();

        $order->save();
        

        return redirect()->back()->with('success', 'Order placed successfully!');

        
    }


    public function storeorders(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function invoice($batch)
    {
        $orders = Orders::all();
        $cart = Cart::content();
        $carttotal =  Cart::total();   
        
        
          

        return view('invoice',compact('orders', 'cart', 'carttotal', 'batch'));

    }

  

    public function dlinvoice($type = 'stream')
    {
            $orders = Orders::all();
            $cart = Cart::content();
            $carttotal =  Cart::total();
            
            $pdf = app('dompdf.wrapper')->loadView('prinvoice',  compact('orders', 'cart','carttotal'));

            if ($type == 'stream') {
                return $pdf->stream('invoice.pdf');
            }

            if ($type == 'download') {
                return $pdf->download('invoice.pdf');
            }
    }

//return $order->getPdf(); // Returns stream default
//return $order->getPdf('download'); // Returns the PDF as download

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
