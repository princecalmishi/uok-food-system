<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Food;
use App\Models\Recipients;
use App\Models\Orders;
use DB;
use Storage;
use Gloudemans\Shoppingcart\Facades\Cart;


class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            return view('admin.index');

        }

         else{
            // return view('home');

            return redirect()->route('home')->with('message', 'State saved correctly!!!');

            // return redirect()->route('regions', ['id' => $id])->with('message', 'State saved correctly!!!');
         }   
    }


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allcats()
    {
       
        $food = Menu::all();
        

        return view('admin.allcat')->with('food', $food);  
    }

    public function allfood()
    {
       
        $food = Food::all();
        

        return view('admin.allfood')->with('food', $food);  
    }


    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.createmenu');

    }

    public function createfood()
    {
        $menu = Menu::all();
        return view('admin.createfood')->with('menu', $menu);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'image|nullable|max:1999'

        ]);

        //handle the file upload
        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/image', $filenameToStore);

        }else{
            $filenameToStore = 'noimage.jpg';
            

        }


        $food = new Menu;        
        $food->Name = $request->input('name');
        $food->Image = $filenameToStore;
        $food->save();
        

        return redirect('/admin')->with('success', 'Resource Created');
    }

    public function storefood(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'menu' => 'required',

            'image' => 'image|nullable|max:1999'

        ]);

        //handle the file upload
        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/image', $filenameToStore);

        }else{
            $filenameToStore = 'noimage.jpg';
            

        }


        $food = new Food;        
        $food->Name = $request->input('name');
        $food->Price = $request->input('price');
        $food->Menu_id = $request->input('menu');

        $food->Image = $filenameToStore;
        $food->save();
        

        return redirect('/admin')->with('success', 'Resource Created');
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
    
    public function pendingorders()
    {
        // $order = Orders::all();
        $order = DB::table('recipients')->where('Status', 'Not Paid')->orderBy('id', 'desc')->get();

        return view('admin.pending')->with('order', $order);

    }  
    
    public function approved()
    {
        // $order = Orders::all();
        $order = DB::table('recipients')->where('Status', 'Paid')->orderBy('id', 'desc')->get();

        return view('admin.approved')->with('order', $order);

    }

    public function approve($id)
    {
        // $order = Orders::all();
        DB::table('recipients')->where('Batch', $id)->update(['Status' => 'Paid']);
        DB::table('orders')->where('Batch', $id)->update(['Status' => 'Paid']);

        // return view('admin.pending')->with('order', $order);
        return redirect()->back()->with('success', 'Product marked as Paid');

    }

    public function seeorder($id)
    {
        // $food = Food::all();

        // return view('home')->with('food', $food);
        $order = DB::table('orders')->where('Batch', $id)->get();     
          
        return view('admin.seeorder',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $food = Menu::all();
        $food = Menu::find($id);

        return view('admin.editcat')->with('food', $food);
        // return view('admin.editcat')->with('menu', $menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatemenu(Request $request, $id)

    {
        $this->validate($request,[

            'name' => 'required',
           
            'image' => 'image|nullable|max:1999'


        ]);

        //handle the file upload
        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/images', $filenameToStore);

        }

        $menu = Menu::find($id);


        $menu->Name = $request->input('name');
        // $food->Image = $filenameToStore;

        if($request->hasFile('image')){
            $menu->image = $filenameToStore;
        }
        $menu->save();

        return redirect('/admin')->with('success', 'Resource Updated');
    }

    public function editfood($id){

        $food = Food::find($id);

        $menu = Menu::all();

        return view ('admin.editfood', compact('food','menu'));


        //return view('admin.editfood')->with('food', $food);

    }

    public function updatefood(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'menu' => 'required',
            'image' => 'image|nullable|max:1999'

        ]);

        //handle the file upload
        if($request->hasFile('image')){
            //get file name with ext
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/images', $filenameToStore);

        }

        $food = Food::find($id);
        $food->Name = $request->input('name');
        $food->Price = $request->input('price');
        $food->Menu_id = $request->input('menu');
        if($request->hasFile('cover_image')){
            $food->image = $filenameToStore;
        }
        $food->save();

        return redirect('/admin')->with('success', 'Food updated');

    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fooddestroy($id)
    {
        $food = Food::find($id);
      

        if($food->image != 'noimage.jpg'){
            Storage::delete('public/images/'.$food->image);
        }

         $food->delete();

         return redirect()->back()->with('error', 'Product deleted');
         //
    }

    public function menudestroy($id)
    {
        $menu = Menu::find($id);
      

        if($menu->image != 'noimage.jpg'){
            Storage::delete('public/images/'.$menu->image);
        }

         $menu->delete();

         return redirect()->back()->with('error', 'Product deleted');
         //
    }
    

    
}
