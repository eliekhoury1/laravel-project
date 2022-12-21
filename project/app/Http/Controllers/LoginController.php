<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\addfood;
use App\Models\Foods;
use App\Models\menufacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers;
use Carbon\Carbon;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      

    public function handleGoogleCallback(request $request)
    {
        try {
        
            //$user = Socialite::driver('google')->user();
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('google_id', $user->id)->first();
            
            if($finduser){
         
                Auth::login($finduser);
                
                $data1=user::where('email',$finduser->email)->value('name');
                $data2=user::where('password',$finduser->password)->value('password');
                $data4=user::where('email',$finduser->email)->value('role');
                $data6=user::where('email',$finduser->email)->value('id');
                $data3=user::where('name',$data1)->where('password',$data2)->get();
                $data8=user::where('email',$finduser->email)->value('photo');
                $data5=user::where('email',$finduser->email)->get();
                $value=$request->session()->put(['user'=>$data1,'id'=>$data6,'email'=>$finduser->email,'photo'=>$data8,'role'=>$data4]);
        
                
        
                return redirect(route('signin.index'));
         
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'google_id'=> $user->id,
                        'role'=>'Role1',
                        'password' => encrypt('123456dummy')
                    ]);
         
                Auth::login($newUser);

        $data1=user::where('email',$newUser->email)->value('name');
        $data2=user::where('password',$newUser->password)->value('password');
        $data4=user::where('email',$newUser->email)->value('role');
        $data6=user::where('email',$newUser->email)->value('id');
        $data3=user::where('name',$data1)->where('password',$data2)->get();
        $data8=user::where('email',$newUser->email)->value('photo');
        $data5=user::where('email',$newUser->email)->get();
        $value=$request->session()->put(['user'=>$data1,'id'=>$data6,'email'=>$newUser->email,'photo'=>$data8,'role'=>$data4]);

        
                return redirect(route('signin.index'));
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



    public function index()
    {
        $result = (new OfferController)->checkexpiry();
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
        
        $data10=user::where('email',$request->email)->value('password');
        
        if ($data10!=''){
        
        $dec = Crypt::decryptString($data10);
       
        $data1=user::where('email',$request->email)->value('name');
       // $data2=user::where('password',$enc1)->value('password');
        $data4=user::where('email',$request->email)->value('role');
        $data6=user::where('email',$request->email)->value('id');
       // $data3=user::where('name',$data1)->where('password',$data2)->get();
        $data7=user::where('email',$request->email)->value('number');
        $data8=user::where('email',$request->email)->value('photo');
        $data5=user::where('email',$request->email)->value('email');
        //$datax=user::where('email',$request->email)->where('password',$request->passord)->get();
        //return $datax;
        
        //return count($data3);
        if($data5==$request->email&&$request->password==$dec)
        {
            $data5=user::where('email',$request->email)->get();
            Cookie::queue('owt-cookie', 'Setting Cookie from Online Web order MEZBAN', 120);
            $request->session()->put(['user'=>$data1,'id'=>$data6,'email'=>$request->email,'number'=>$data7,'photo'=>$data8,'role'=>$data4]);
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
                return back();
                }
            }
            else
        return back();
    

}
    public function logout(Request $request)
    {
        $request->session()->pull('user');
        $request->session()->pull('id');
        $request->session()->pull('role');
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

     //$request->confirmpassword;


    public function store(Request $request)
    {
        //

       
        $request->validate(['email'=> 'required|email|unique:users',
        'password' => 'min:6',
        'confirmpassword' => 'required_with:password|same:password|min:6']);

        $encrypted = Crypt::encryptString($request->password);

        $data=new user();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->role=$request->role;
        $data->password=$encrypted;

       
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
    public function edit($user)
    {
        $data=user::find($user);
        return view("Editprofile")->with("listdata",$data);
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$user)
    {
     $data=user::find($user);
     
     $data->name=$request->name;
     $data->number=$request->number;
     $tmp= $request->file('photo')->store('public/images'); 
     $data->photo= str_replace('public', '', $tmp);
     $data->save();
     return redirect (route('signin.index'));
     
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
    public function getuser()
    {
        $data=user::where('role','Role1')->get();

        return view('usertable')->with('data',$data);
    }


    public static function fetmenus()
    {
        $data=user::where('role','Role2')->get();
        return $data;


    }

    public function getstore()
    {
        $data=user::where('role','Role2')->get();

        return view('storetable')->with('data',$data);
    }
    public function backtouser($id)
    {
        $data=user::find($id);

        $data->role='Role1';
        
        $data->save();
        menufacts::where('user_id', $id)->delete();
        foods::where('user_id',$id)->delete();
        return back();
    }
    public  static function usercount ()
    {
        $data=user::where('role','Role1');
        $count=$data->count();
        return $count;
    }
    public  static function storecount ()
    {
        $data=user::where('role','Role2');
        $count=$data->count();
        return $count;
    }
    public function getallfood()
    {
        
        $query = foods::select(DB::Raw('users.name as store'),DB::Raw('foods.*'))
    ->join('users', 'foods.user_id', '=', 'users.id')->get();
        
        return view('foodstable')->with('data',$query);
    }
    public  static function foodcount ()
    {
        $data=foods::all();
        $count=$data->count();
        return $count;
    }



    public function getcartcount()
    {
        $data=user::find(session('id'))->getcart;
        if($data==''){

            return 0;
        }
        $data1=$data->getAllFoods->count();
        return $data1;
    }



}
