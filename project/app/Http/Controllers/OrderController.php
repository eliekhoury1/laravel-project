<?php
namespace App\Http\Controllers;
use App\Models\cartfood;
use App\Models\foods;
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
    public function createorder(Request $request,$cart)
    {   
        $restos=cart::find($cart)->getAllFoods;
        $uniqueresto=$restos->unique('user_id');
        foreach($uniqueresto as $resto)
       {
        $data=new order();

        $data->timer=0;
        $data->code=Str::random(40);
        $data->user_id=session()->get('id');
        $data->resto_id=$resto->user_id;
        $query = foods::select(DB::Raw('cartfoods.quantity as store'),DB::Raw('foods.*'))
        ->join('cartfoods', 'foods.id', '=', 'cartfoods.foods_id')
        ->where('foods.user_id',$resto->user_id)
        ->where('cartfoods.carts_id', $cart)
        ->get();
        $sum=0;
        foreach($query as $q){
            $result = (new FoodsController)->getnewprice($q->id);
            $temp=$q->store*$result;
            $sum=$sum+$temp;
        }
        $data->total=$sum;
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
       if($order->status=='delivering'){
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
    else
      {
        return $order->status;

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
    public function checkorders(){
        $data=order::where("status","pending")->where('resto_id',session('id'))->get();
        return view('pendingorders')->with('data',$data);
        
    }

    public function acceptorder($id){
        $data=order::find($id);
        $data->status="delivering";
        $data->save();
        return back();

    }


    public function rejectorder($id){
        $data=order::find($id);
        $data->status="rejected";
        $data->save();
        return back();
    }


    public function updateord(Request $request)
    {
        $mydate=Carbon::now();
       $mytime=\Carbon\Carbon::parse($mydate)->timestamp;
        $date=Carbon::now()->format('d-m-Y');
        $re=$date . ' ' . $request->input('timer');
        $time = strtotime ( $re );
        if($time-$mytime<900 && $time-$mytime>0)
        {
            $newtime= Carbon::now()->addMinutes(30);
            $time =\Carbon\Carbon::parse($newtime)->timestamp;
        }
        if($mytime>$time)
        {
            $time=$time+86400;
        }
         
        $data=order::where('status','waiting')->update(['timer'=>$time] );
        
        return view('stripe')->with('data',$request->input('total'));
        
    }
    public static function gettime(){
        $today=Carbon::today(); 
        $now=Carbon::now()->addMinutes(30);
        $time=$now->diff($today)->format('%H:%i');
        return $time;

    }
    public static function notansweredorders(){
        $data=order::where('status','pending')->get();
        foreach($data as $p)
        {
            $newtime= Carbon::now();
            $time =\Carbon\Carbon::parse($newtime)->timestamp;
            //now in timestamp
            $createdtime=\Carbon\Carbon::parse($p->created_at)->timestamp;
            if($time-$createdtime>600)
            {
                $data1=order::find($p->id);
                $data1->status='no responses';
                $data1->save();
            }
        

        }        
    }
}
