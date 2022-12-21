<?php

namespace App\Http\Controllers;
use App\Models\cartfood;
use App\Models\cart;
use App\Models\user;
use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessionId = session()->get('id');
        $data1=cart::where('user_id',$sessionId)->value('id');
        $data=cart::find($data1)->getAllFoods;
        
       return view('cartpage')->with('data',$data);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy( $cart)
    {
        $data= cart::find($cart);
        $data->delete();
        return redirect(route('signin.index'));
    }
    public function destroycartbyuserid()
    {
        
        $data= cart::where('user_id',session()->get('id'))->first();
        $data->delete();
    }
     public function tocartpage($id){
        $data=cart::find($id)->getAllFoods;
        
         return view('cartpage')->with('data',$data);
     }
    public function Addtocart($food)
    {    
        
        $sessionId = session()->get('id');
        
        $temp=user::find($sessionId)->getcart()->first();
        
       
        if($temp=='')
        {
        $data=new cart();
       
        $data->user_id= $sessionId;
        
        $data->save();
        $data1=new cartfood();
        $data1->carts_id=$data->id;
        $data1->foods_id=$food;
        $data1->quantity=1;
        $data1->save();
        
    //     // $data2=cart::where('login_id',$sessionId)->where('resto_id',$owner)->value('id');
    //     // $data3=cart::find($data2)->getAllFoods;
    //    return view('cartpage')->with('data',$data3);
    return redirect(url('toCart',['id'=>$data->id]));
    }
        $up=cartfood::where('foods_id',$food)->where('carts_id',$temp['id'])->value('quantity');
        if($up!='')  
        {   $t=$up+1;
            if($t>5){
                $t=5;
            }
            DB::table('cartfoods')->where('foods_id',$food)->where('carts_id',$temp['id'])->update(['quantity'=>$t]);
            
            return redirect(url('toCart',['id'=>$temp['id']]));
           
           
        }  
        $data1=new cartfood();
        $data1->carts_id=$temp['id'];
        $data1->quantity=1;
        $data1->foods_id=$food;
        $data1->save();
        return redirect(url('toCart',['id'=>$temp['id']]));
    }
    public static function getquantity($food,$cart)
    {   
           
        $data=cartfood::where('foods_id',$food)->where('carts_id',$cart)->value('quantity');
        return  $data;
    }
    public static function getTotal($cart)
    {   
       
        $purchases = DB::table('foods')
        ->join('cartfoods', 'cartfoods.foods_id', '=', 'foods.id')
        ->where('cartfoods.carts_id', '=', $cart)
        ->select(DB::raw('sum(foods.price*cartfoods.quantity)as total'))->first();
        return  $purchases->total;
    }
    public function updateacart(Request $request, $cart,$food)
    {   
        
        DB::table('cartfoods')->where('foods_id',$food)->where('carts_id',$cart)->update(['quantity'=>$request->input('quantity')]);
        return redirect()->back();
        
        return redirect(url('toCart',['id'=>$cart]));
        
    }
    public function deleteacart($cart,$food)
    {   
        
        DB::table('cartfoods')->where('foods_id',$food)->where('carts_id',$cart)->delete();
        $data=cartfood::where('carts_id',$cart);
        $count=$data->count();
        if($count==0){
            $this->destroycartbyuserid();
            return redirect(route('signin.index'));
        }
        return redirect(url('toCart',['id'=>$cart])); 
       
    }
    public static function checkifcartexist(){
        // return session()->get('id');
        if(session()->get('id')){
        $data=user::find(session('id'))->getcart;
        if($data!='')
        return $data->id;
    }
    
    
    }
}
