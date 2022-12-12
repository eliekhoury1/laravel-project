<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use Illuminate\Http\Request;
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
        $tmp= $request->file('photo')->store('public/images'); 
        $data->photo= str_replace('public', '', $tmp);
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
        return redirect (route('Foods.index'));
    }

    public function search(Request $request)
    {
        $tmp=$request->input('type');
        // $data=foods::where("name", $tmp)->orwhere("price", $tmp)->orwhere("cuisine", $tmp)->orwhere("diet", $tmp)->get();
        // $data1=foods::where("resto_id",$result)->get();
        // $mergedArray = array_merge($data->toArray(), $data1->toArray());
        $result = (new LoginController)->search($tmp);
        $query = foods::select(DB::Raw('users.name as store'),DB::Raw('foods.*'))
    ->join('users', 'foods.user_id', '=', 'users.id')
    ->where('foods.user_id',  $result)
    ->where('users.id', $result)
    ->get();
    $query1 = foods::select(DB::Raw('users.name as store'),DB::Raw('foods.*'))
    ->join('users', 'foods.user_id', '=', 'users.id')->
    where("foods.name", $tmp)->orwhere("foods.price", $tmp)->orwhere("foods.cuisine", $tmp)->orwhere("foods.diet", $tmp)->get();
        
    $mergedArray = array_merge($query->toArray(), $query1->toArray());
    return  view('list')->with('list',$mergedArray);
    }
    public  static function getfood( $foods)
    {
        $data=foods::find($foods);
        return $data;
    }
    public  static function getfoodname( $foods)
    {
        $data=foods::find($foods)->getLogin;
        return $data->name;
    }


}
