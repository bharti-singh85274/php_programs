<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\File;
use DB;
use Validator;

class ApiController extends Controller
{
    //

    function cruds(){
       $data = Crud::get();
       return $data;
    }

    function add_cruds(Request $request){

        $array = array(
        'name' => 'required',
        'email' => 'required',
        'mobile' => 'required|max:10|min:10',
        );

       $validate = Validator::make($request->all(),$array);

       if($validate->fails()){
          return $validate->errors();
       }else{
      
       $data = new Crud;
       $data->name = $request->name;
       $data->email = $request->email;
       $data->mobile = $request->mobile;

       if($request->hasfile('image')){

           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension();
           $filename = time(). '.' .$ext;
           $file->move('api',$filename);

           $data->images = $filename;
       }

       $data->save();

       return ['data'=>'success'];
       }
       
       
    }


    function update_cruds(Request $request,$id){
       
       $data = Crud::find($id);
       $data->name = $request->name;
       $data->email = $request->email;
       $data->mobile = $request->mobile;

       $destination = 'api'.$data->images;

      if(File::exists($destination)){
          File::delete($destination);
      }

       if($request->hasfile('image')){

           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension();
           $filename = time(). '.' .$ext;
           $file->move('api',$filename);

           $data->images = $filename;
       }

       $data->save();

       return ['data'=>'success'];
    }


    function delete_cruds($id){

         $data = Crud::find($id);
         $data->delete();

         return ['msg'=>'record deleted.'];
    }

}
