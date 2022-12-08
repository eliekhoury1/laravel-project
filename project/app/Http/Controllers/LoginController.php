<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('website');
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        //
        $data=new login();
        $data1=login::where('email',$request->email)->value('name');
        $data2=login::where('password',$request->password)->value('password');
        $data4=login::where('email',$request->email)->value('role');
        $data6=login::where('email',$request->email)->value('id');
        $data3=login::where('name',$data1)->where('password',$data2)->get();
        $data7=login::where('email',$request->email)->value('number');
        if($data3!='[]')
        {
            $data5=login::where('email',$request->email)->get();
            Cookie::queue('owt-cookie', 'Setting Cookie from Online Web order MEZBAN', 120);
            $request->session()->put(['user'=>$data1,'id'=>$data6,'email'=>$request->email,'number'=>$data7]);
            //$request->session()->put('user',$data1,'id',$data6);
            
            //return view('candidates');
            if($data4=="Role1")
            {
                
                //return session('user');
                return view('website');
               // return redirect (route('signin.index'));
              
            }
            else if ($data4=="Role3")
            {
                return redirect (route('store.index'));
            }
            else if ($data4=="Role2")
            {
               // $obj=new CandidateController();
                //$data=candidate::all();
                //return view('listcandidate')->with("listdata",$data);
                //return $obj->index();
                return redirect (route('addfood.index'));
            }
            
        }
            else{
                return "not found";
                }
        
    }


    public function logout(Request $request)
    {
        $request->session()->pull('user');
        $request->session()->pull('id');
        return redirect (route('signin.index'));
    }

    public function create()
    {
        return view('registration');
        
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
        $data=new login();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->role=$request->role;
        $data->password=$request->password;
        $data->save();
        return redirect (route('signin.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
        return "fourijat";
        
        //$data=store::find($store->email);
        //return $data;
        // $data->lastname=$request->lastname;
        //$data->firstname=$request->firstname;
        //$data->email=$request->email;
        //$data->password=$request->password;
        //$data->save();
        //return redirect(route('signup.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
}
