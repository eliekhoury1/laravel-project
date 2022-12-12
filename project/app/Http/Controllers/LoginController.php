<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\addfood;
use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=Foods::all();
        $data2=user::where('role',"Role2")->get();
        $data3= DB::table('users')
        ->join('Foods','Foods.user_id', '=','users.id')
        ->select('users.*')->get();
        return view("website",compact('data','data2','data3'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        //
        $data=new user();
        $data1=user::where('email',$request->email)->value('name');
        $data2=user::where('password',$request->password)->value('password');
        $data4=user::where('email',$request->email)->value('role');
        $data6=user::where('email',$request->email)->value('id');
        $data3=user::where('name',$data1)->where('password',$data2)->get();
        $data7=user::where('email',$request->email)->value('number');
        $data8=user::where('email',$request->email)->value('photo');
        if($data3!='[]')
        {
            $data5=user::where('email',$request->email)->get();
            Cookie::queue('owt-cookie', 'Setting Cookie from Online Web order MEZBAN', 120);
            $request->session()->put(['user'=>$data1,'id'=>$data6,'email'=>$request->email,'number'=>$data7,'photo'=>$data8]);
            if($data4=="Role1")
            {
                return redirect (route('signin.index'));
            }
            else if ($data4=="Role3")
            {
                return redirect (route('store.index'));
            }
            else if ($data4=="Role2")
            {
                return redirect (route('Foods.index'));
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
        $data=new user();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->role=$request->role;
        $data->password=$request->password;
        //$tmp= $request->file('photo')->store('public/images'); 
        //$data->photo= str_replace('public', '', $tmp);
        $data->save();
        return redirect (route('signin.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $login)
    {
     //  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $login)
    {
        //
    }


    public function search($tmp)
    {
        $data=user::select('id')->where("name", $tmp)->value('id');
        

        return $data;
    }

}
