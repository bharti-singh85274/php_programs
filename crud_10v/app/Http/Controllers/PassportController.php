<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class PassportController extends Controller
{
    

     function register(Request $request){
         
         $user = User::create([

         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),

         ]);

         $token = $user->createToken('token')->accessToken;

         return response()->json(['token'=>$token, 'user'=>$user],200);
    }


  function login(Request $request){

       $data = [
       
       'email' => $request->email,
       'password' => $request->password

       ];


       if(auth()->attempt($data)){

           $token = auth()->user()->createToken('token')->accessToken;
            return response()->json(['token'=>$token],200);

       }else{

            return response()->json(['error'=>'unauthorized'],401); 
       }

  }



 function userInfo(){

     $user = auth()->user();

      return response()->json(['user'=>$user],200); 
 }

}
