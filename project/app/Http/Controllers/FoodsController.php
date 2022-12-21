<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\menufacts;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = (new OfferController)->checkexpiry();
        $data1=Foods::where("user_id",session('id'))->get();
        return view("displaymenu")->with('listdata',$data1);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("addfood");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

       
        $product = new Foods();
        $product->name=$request->name;
        $product->price= $request->price;
        $product->cuisine= $request->cuisine;
        $product->diet= $request->diet;
        $product->user_id=session('id');
        //$product->photo=$request->image;
        $tmp= $request->file('photo')->store('public/images'); 
        $product->photo= str_replace('public', '', $tmp);
        $product->save();
        return redirect(route('Foods.index'));
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foods  $addfood
     * @return \Illuminate\Http\Response
     */
    public function show(Foods $addfood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foods  $addfood
     * @return \Illuminate\Http\Response
     */
    public function edit($addfood)
    {
        //
        $data=Foods::find($addfood);
        return view("Editfood")->with("addfood",$data);
        //$data=addfood::find($addfood->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foods  $addfood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$addfood)
    {
        //
        $data=Foods::find($addfood);
        $data->name=$request->name;
        $data->price= $request->price;
        $data->cuisine= $request->cuisine;
        $data->diet= $request->diet;
        if($request->hasfile('photo')){
        $tmp= $request->file('photo')->store('public/images'); 
        $data->photo= str_replace('public', '', $tmp);
        }
        
        $data->save();
        return redirect(route('Foods.index'));


     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foods  $addfood
     * @return \Illuminate\Http\Response
     */
    public function destroy($addfood)
    {
        //
        $data=Foods::find($addfood);
        $data->delete();
        return back();
    }
    public function search(Request $request)
    {
        $id = (new LoginController)->search($request->input('type'));
        if((!$request->input('price1')||!$request->input('price2'))&&$request->input('type')){
            $query1=foods::where("name",'LIKE','%'. $request->input('type').'%')->orwhere("cuisine",'LIKE','%'. $request->input('type').'%')->orwhere("diet", 'LIKE','%'. $request->input('type').'%')->get(); 
                
            if($id!=""){
                $query=User::find($id)->getfoods;
                $mergedArray = array_merge($query->toArray(), $query1->toArray());
                $mergedArray = array_unique($mergedArray, SORT_REGULAR);
                return  view('search')->with('list',$mergedArray);
            }
            return  view('search')->with('list',$query1);
                
        }
        elseif(($request->input('price1')&&$request->input('price2'))&&$request->input('type')){
            $tmp=$request->input('type');
            $query1=foods::whereBetween('price', [$request->input('price1'), $request->input('price2')])
            ->where(function ($query)use ($tmp) {$query->orwhere("name",'LIKE','%'. $tmp.'%')->orwhere("cuisine",'LIKE','%'. $tmp.'%')->orwhere("diet", 'LIKE','%'. $tmp.'%');})->get(); 
           
            if($id!=""){    
                $query=User::find($id)->getfoods->whereBetween('price', [$request->input('price1'), $request->input('price2')]);
                $mergedArray = array_merge($query->toArray(), $query1->toArray());
                $mergedArray = array_unique($mergedArray, SORT_REGULAR);
                return  view('search')->with('list',$mergedArray);
            }
        return  view('search')->with('list',$query1);
        }

        elseif(($request->input('price1')&&$request->input('price2'))&&!$request->input('type')){
            $query1=foods::whereBetween('price', [$request->input('price1'), $request->input('price2')])->get(); 
            return  view('search')->with('list',$query1);
        }
        
        elseif((!$request->input('price1')||!$request->input('price2'))&&!$request->input('type')){
            $query1=foods::all(); 
            return  view('search')->with('list',$query1);
        }
    }


    public  static function getfood( $foods)
    {
        $data=foods::find($foods);
        return $data;
    }

    //return cook name
    public  static function getfoodname( $foods)
    {
        $data=foods::find($foods)->getLogin;
        return $data->name;
    }



   

    public  static function getallfoods( )
    {
        $data=foods::all();
        return view('usermenu')->with('listdata',$data);
    }
    public function getallfood()
    {
        
        $query = foods::select(DB::Raw('users.name as store'),DB::Raw('foods.*'))
    ->join('users', 'foods.user_id', '=', 'users.id')->get();
        
        return view('foodstable')->with('data',$query);
    }


    public function editmenuinfo( )
    {
        $data1=foods::where('user_id',session('id'))->get();
        $data2=menufacts::where('user_id',session('id'))->first();
        //return $data2;
        return view('editmenuinfo')->with('listdata1',$data1)->with('data2',$data2);
    }

    public function updatemenuinfo(request $request,$id)
    {
        $data=menufacts::find($id);
        $data->nutritional_facts=$request->nut;
        $data->foods_id=$request->foods;
        $data->save();
        return redirect(route('Foods.index'));
    }

    public function getchefmenu($id)
    {
        
        $data=Foods::where('user_id',$id)->get();
        $q1 = foods::select(DB::Raw('menufacts.nutritional_facts as nut'),DB::Raw('foods.*'))
        ->join('menufacts', 'foods.id', '=', 'menufacts.foods_id')
        ->where('foods.user_id',  $id)
        ->where('menufacts.user_id',  $id)
        ->first();
        $data1=user::find($id)->getreviews;
        
        //return $q1;
        return view('usermenu')->with('d1',$data)->with('q',$q1)->with('d2',$data1);
    }


    
    public  static function foodcount ()
    {
        $data=foods::all();
        $count=$data->count();
        return $count;
    }

    public static function getnewprice($food)
    {
        $data1=foods::find($food);
        $data=foods::find($food)->getoffer;
        if($data=='')
        {
            return $data1->price; 
        }
        else{
            $mydate=Carbon::now();
       $mytime=\Carbon\Carbon::parse($mydate)->timestamp;
            if($mytime>$data->Start_offer&&$mytime<$data->End_offer){ 
                $temp=100-$data->percentage;
                return $data1->price*$temp/100;
            }
            else{
                return $data1->price; 
            }
       
        }
    }
 



}


