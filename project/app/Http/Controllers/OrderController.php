<?php
namespace App\Http\Controllers;
use App\Models\cartfood;
use App\Models\history;
use App\Models\order;
use App\Models\cart;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=user::find(session()->get('id'))->getorder;
        return view('list1')->with('data',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        $data=order::find($order)->gethistory;
        return view('list2')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
    public function createorder(Request $request,$total,$cart)
    {   //$foods=cartfood::select('foods_id','quantity')->where('carts_id',$cart)->get(); b3den bde erj3 3ouza
        $restos=cart::find($cart)->getAllFoods;
        $uniqueresto=$restos->unique('user_id');
        foreach($uniqueresto as $resto)
       {
        $data=new order();
        // // $date=Carbon::now()->format('d-m-Y');
        // // $re=$date . ' ' . $request->input('timer');
        // $time = strtotime ( $re );
        $data->timer=0;
        $data->code=Str::random(40);
        $data->user_id=session()->get('id');
        $data->resto_id=$resto->user_id;
        $tot = DB::table('foods')
        ->join('cartfoods', 'cartfoods.foods_id', '=', 'foods.id')
        ->where('cartfoods.carts_id', '=', $cart)
        ->where('foods.user_id', $resto->user_id)
        ->select(DB::raw('sum(foods.price*cartfoods.quantity)as total'))->first();
        
        $data->total=$tot->total;
        $data->status='waiting';
        $data->save();
        
        $foods = cartfood::select('quantity',DB::Raw('foods.id as foods_id'))
        ->join('foods', 'foods.id', '=', 'cartfoods.foods_id')
        ->where('cartfoods.carts_id', '=', $cart)
        ->where('foods.user_id', $resto->user_id)
        ->get(); 
        foreach($foods as $p)
	        {
                $data2=new history();
                $data2->order_id=$data->id;
                $data2->foods_id=$p->foods_id;
                $data2->quantity=$p->quantity;
                
                $data2->save();
            }
        
       }
            
        return redirect(url('CheckOrders'));
    }
    public static function getrestoname($or){
        $order=order::find($or)->getresto;
        return $order;

    }
    public static function gettimeremaining($ord){
       $mydate=Carbon::now();
       $mytime=\Carbon\Carbon::parse($mydate)->timestamp;
        $order =order::find($ord);
       
       if($order->timer>$mytime)
       {   
           
           
           
           $date3=$order->timer-$mytime;
           $h=floor(($date3%86400)/3600);
           $m = floor(($date3%3600)/60);
           
          return $h.'h:'.$m.'min';
       }
       else{
        $order->status='completed';
        $order->save();
        return 'completed';
       }
    }
    public function checkout()
    {
        $data=order::where('status','waiting')->get();
        return view('list3')->with('data',$data);
    }
    public function cancelorder()
    {
        $data=order::where('status','waiting')->delete();
        $cart_id=user::find(session()->get('id'))->getcart->id;
        return redirect(url('toCart',['id'=>$cart_id]));
    }
    public function updateord(Request $request)
    {
        $date=Carbon::now()->format('d-m-Y');
        $re=$date . ' ' . $request->input('timer');
        $time = strtotime ( $re );
        $data=order::where('status','waiting')->update(['status'=>'delivering','timer'=>$time] );
        $result = (new CartController)->destroycartbyuserid();
        return redirect(route('signin.index'));
    }
}
