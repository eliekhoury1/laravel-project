<?php

namespace App\Http\Controllers;

use App\Models\offer;
use App\Models\foods;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=offer::where('user_id',session('id'))->get();
        return view('displayoffer')->with('listdata',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=foods::where('user_id',session('id'))->get();
        return view('createoffer')->with('listdata',$data);
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
        $data=new offer();
        $data->Start_offer=\Carbon\Carbon::parse($request->start)->timestamp;
        $data->End_offer=\Carbon\Carbon::parse($request->end)->timestamp;
        $data->percentage=$request->percentage;
        $data->foods_id=$request->food;
        $data->user_id=session('id');
        $data->save();
        return redirect(route('Foods.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($offer)
    {
        $data=offer::find($offer);
        $data->delete();
        return back();
        
    }

    public  static function getoffertime($id)
    {
        $mydate=Carbon::now();
        $mytime=\Carbon\Carbon::parse($mydate)->timestamp;
        $data=offer::find($id);
        if($mytime>$data->Start_offer&&$mytime<$data->End_offer){
            $date3=$data->End_offer-$mytime;
            $d=floor(($date3%31536000)/86400);
           $h=floor(($date3%86400)/3600);
            return $d.'days '.$h.' hours left';

        }
        if($mytime<$data->Start_offer){
            
            return "too soon";
        }
    }


    public function checkexpiry(){
        $mydate=Carbon::now();
        $mytime=\Carbon\Carbon::parse($mydate)->timestamp;
        $data=offer::where('End_offer', '<=', $mytime)->delete();
    }



    public static function iforderexist($food){
        $data=foods::find($food)->getoffer;
        if($data!=''){
            $mydate=Carbon::now();
            $mytime=\Carbon\Carbon::parse($mydate)->timestamp;
            if($mytime>$data->Start_offer&&$mytime<$data->End_offer){ 
                return 1;
            }
            else{
                return 0; 
            }
        }
        return 0;
    }








}
