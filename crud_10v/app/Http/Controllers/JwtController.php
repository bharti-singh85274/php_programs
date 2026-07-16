<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Hash;

class JwtController extends Controller
{

  
  function register(Request $request){


       $validator = Validator::make($request->all(), [

         'name' => "required|string|min:2|max:100",
         'email' => "required|string|email|max:100|unique:users",
         'password' => "required|string|min:6"

       ]);



       if($validator->fails()){
             return response()->json($validator->errors(), 400);
       }


       $user = User::create([

        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),

       ]);

     //  $tok = JWTAuth::fromUser($user);
       return  response()->json([
        'msg' => 'user register successfully',
        'user' => $user

       ]);
  }


  function login(Request $request){

         
          $validator = Validator::make($request->all(), [

         'email' => "required|string|email",
         'password' => "required|string|min:6"

       ]);



       if($validator->fails()){
             return response()->json($validator->errors(), 400);
       }

      if(!$token = auth()->attempt($validator->validated()))
      {
          return response()->json(['error'=>'unauthorised']);
      }

      return $this->respondWithToken($token);
  }

 
 protected function respondWithToken($token){

      return response()->json([

       'access_token' => $token,
       'token_type' => 'bearer',
       'expires_in' => auth()->factory()->getTTL()*60
       
      ]);
 }


  function profile(){

       return response()->json(auth()->user());
  }

  function refresh(){
  
      return $this->respondWithToken(auth()->refresh());
  }


  function logout(){

      auth()->logout();

      return response()->json(['msg'=> 'User successfully logged out']);
  }



}
