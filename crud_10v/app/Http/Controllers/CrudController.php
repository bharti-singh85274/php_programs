<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use DB;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\File;

class CrudController extends Controller
{
    //

    function get(){
        $data = Crud::get();
        return view('crud.add',['data'=>$data]);
    }


    function add(Request $request){
      
        $add = new Crud;

        $validate = $request->validate([
        
        "name"=> "required",
        "email" => "required",
        "mobile" => "required",
        ]);

        $add->name = $request->name;
        $add->email = $request->email;
        $add->mobile = $request->mobile;

        if($request->hasfile('images')){

            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $add->images = $filename;  
        }

        $add->save();
        return back()->with('msg','Data saved successfully');

    }

     function edit(Request $request,$id){

        $data = Crud::find($id);
        return view('crud.edit',['edit'=>$data]);

    }

     function update(Request $request,$id){
      
        $update = Crud::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->mobile = $request->mobile;

        $destination = 'uploads/'.$update->images;

        if(File::exists($destination)){
            File::delete($destination);
        }
         
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('uploads/',$filename);
            $update->images = $filename;
        }

        $update->save();

        return ["key"=>'data updated successfully..'];

    }


      function delete($id){

        $add = Crud::find($id);
        $add->delete();

        return ["key"=>'data deleted successfully'];

    }




    //--------------------------------- PHP IMAGE SAVE ----------------------------------------

   function phpimage(){

        return view('crud/phpimage');
   }


   function phpimages(){

     $folder = 'myimage/';
     $filename = basename($_FILES["image"]["name"]);
     $final_img = $folder.$filename;

     $file_path = pathinfo($final_img, PATHINFO_EXTENSION);

     $allowed_ext = array('jpg','jpeg','gif','png');

     if(in_array($file_path, $allowed_ext)){

          if(move_uploaded_file($_FILES['image']['tmp_name'], $final_img)){

            $img =   DB::select("INSERT INTO phpimages (images) VALUES ('".$final_img."')");

                echo "Image saved..";
          }
     }else{

          echo "File can be saved Only supported formats jpg,jpeg,gif,png ";
     }

   }



   function joins(){

       // $data = DB::table('employees')->join('companies','employees.company_id','=',
       //  'companies.id')->select('companies.name as company_name','employees.name','employees.designation')
       // ->get();



                            //SQL INNER JOIN (return common records only which also in 2nd table)
       // $data = DB::select("SELECT companies.id,companies.name, employees.company_id  
       //  from companies inner join employees on companies.id = employees.company_id");
                           
                         //SQL LEFT JOIN(return all rows from table1, matched records from table2 ,for rows no matching row on right side,result will contain null)
       // $data = DB::select('SELECT companies.id,companies.name,employees.company_id FROM companies 
       //    left join employees on companies.id = employees.company_id');

                         //SQL RIGHT JOIN(return all rows from table2, matched records from table1 ,for rows no matching row on left side,result will contain null)
        // $data = DB::select("SELECT companies.id,companies.name,employees.company_id FROM companies
        //   RIGHT JOIN employees on employees.company_id = companies.id ");


                          //SQL FULL/FULL OUTER JOIN (returns all matched records in either left or right table and returns null for unmatched rows from both tables. NOTE: NOT RUN IN MYSQL. Only for MYSQLi or PDO)

         // $data = DB::select("SELECT * FROM companies
         // FULL OUTER JOIN employees on companies.id = employees.company_id");


                    // SQL SELF JOIN(table joins to itself use for comparing rows in same table for hierarchical data eg. retrieve employee manager relationships)

          // $data = DB::select("select employee.id, employee.name, employee.manager_id, manager.company_id as company from employees employee join employees manager on employee.manager_id = manager.id");
    

        // return view('joins',compact('data'));
   }



   function relations(){

         $hasone = Employee::with('get_company')->get();
         $hasmany = Company::with('getEmployee')->get();
         $belongsto = Employee::with('get_companies')->get();

         return view('relations',compact('hasone','hasmany','belongsto'));
   }




   function get_two(){

         $data = DB::table('cruds')->get();
         return view('crud2.get_two',['data'=>$data]);
   }

   function add_two(Request $request){

      $data = new Crud;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->mobile = $request->mobile;

      if($request->hasfile('image')){
         $file = $request->file('image');
         $ext = $file->getclientoriginalextension();
         $filename = time(). '.'.$ext;
         $file->move('uploads/',$filename);

         $data->images = $filename;
      }

      $data->save();

      return back()->with('msg',"data saved");
   }


   function edit_two($id){

       $data = Crud::find($id);
       return view('crud2.edit2',compact('data'));
   }


   function update_two(Request $request,$id){
     
       $data = Crud::find($id);
       $data->name = $request->name;
       $data->email = $request->email;
       $data->mobile = $request->mobile;


       $destination = 'uploads/'.$data->images;
       if(File::exists($destination)){
           File::delete($destination);
       }

       if($request->hasfile('image')){
         $file = $request->file('image');
         $ext = $file->getclientoriginalextension();
         $filename = time(). '.'.$ext;
         $file->move('uploads/',$filename);

         $data->images = $filename;
      }

      $data->save();

     return back()->with('updated','data updated');
  
   }


   function delete_two($id){

       $data = Crud::find($id);
       $data->delete();

       return redirect('get_two')->with('delete','Data deleted successfully');
   }



  function get_three(){
      return view('crud3.get_three');
  }


  function add_three(Request $request){
    
     $add = new Crud;
     $add->name = $request->name;
     $add->email = $request->email;
     $add->mobile = $request->mobile;

     if($request->hasfile('image')){
         $file = $request->file('image');
         $ext = $file->getclientoriginalextension();
         $filename = time(). '.' .$ext;
         $file->move('uploads',$filename);
         
         $add->images = $filename;

     }

     $add->save();

     if($add){
         return response()->json([
            'status'=> 200,
            'msg'=> 'data saved']);
     }
  }



function fetch_three(){

     $data = Crud::get();

     return response()->json([
        "status"=>200,
        "msg" =>$data]);
}


function edit_three($id){

    $edit = Crud::find($id);

    if($edit){

        return response()->json([
            'status'=>200,
            'edit'=>$edit
      ]);
    }else{

        return response()->json([
           'status'=>400,
           'msg'=> 'not found'
        ]);
    }

}



function update_three(Request $request,$id){

    $update = Crud::find($id);

    $update->name = $request->name;
    $update->email = $request->email;
    $update->mobile = $request->mobile;


    if($request->hasfile('image')){

   $path = 'uploads/'.$update->images;
    if(File::exists($path)){
       return File::delete($path);
    }

        $file = $request->file('image');
        $ext = $file->getclientoriginalextension();
        $filename = time(). '.'.$ext;
        $file->move('uploads/',$filename);

        $update->images = $filename;
    }

    $update->save();

    if($update){
        return response()->json([
         'status'=>200,
         'msg'=>'data updated'
        ]);
    }else{

        return response()->json([
         'status'=>400,
         'msg' => 'not found'
        ]);
    }

}



function delete_three($id){

    $del = Crud::find($id);
    $del->delete();

    return response()->json([
        'status'=>200,
        'msg'=>'data deleted'
]);
}


}
