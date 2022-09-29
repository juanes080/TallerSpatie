<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class logueo extends Controller
{
    public function login(Request $request){

        $email=$request->email;
        $pasword=$request->pasword;
        $validar=validator::make($request->all(),[
            'email'=>'required',
            'pasword'=>'required'
        ]);
    if($validar->fails()){
       $usuarioemail=User::where('email',$email)->get();
       if(Hash::check($pasword,$usuarioemail->password)){
         return view('Admin.Dashboard');
         Session::put('id',$usuarioemail->id);
         Session::put('user',$usuarioemail->name);
         Session::put('email',$usuarioemail->email);
         return view('Admin.Dashboard');
       }
    }
    
    }
    
        
}
