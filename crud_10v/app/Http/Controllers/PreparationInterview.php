<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Company;
use App\Models\Employee;

class PreparationInterview extends Controller
{
    
    function prac(){

              // laravel joins and Sql joins 
            
        //join
        // $data = DB::table('employees')->join('companies','employees.company_id','=','companies.id')
        //         ->select('employees.name','companies.name as company','employees.designation')
        //         ->get();

        //inner sql join
        // $data = DB::select("SELECT companies.id,companies.name, employees.company_id  
        // from companies inner join employees on companies.id = employees.company_id");

        // right join
        // $data = DB::select("select companies.id,companies.name,employees.manager_id from companies right join employees on employees.company_id = companies.id");

        // self join
        // $data = DB::select('select employee.id,employee.name,employee.manager_id, manager.company_id as company from employees employee join employees manager on manager.id = employee.manager_id');
              
       // return view('interview',compact('data'));




            // reveerse string
        // $str = 'bharti';

        // $length = strlen($str);

        // for($i=$length-1; $i >= 0; $i--){

        //      echo $str[$i];
        // }


        // mid value
       //  $arr = [2,5,6,7,3];
       // // sort($arr);
       //  $count = count($arr);
       //  $med = $count/2;
       //  $int_val = (int)$med;
       //  return  $arr[$int_val];


        // duplicate value from array

        // $arr = [3,5,6,6,3,8];
        // for($i=0; $i <count($arr);$i++){
        //     for($j=$i+1; $j< count($arr);$j++){
        //          if($arr[$i] == $arr[$j]){
        //              echo $arr[$i];
        //          }
        //     }
        //     echo "<br>";
        // }


        // table
    // $num = 2;
    //     for($i=1; $i<=10;$i++){
    //         echo $i*$num.'<br>';
    //     }

  
        // max smax from array

//     $arr = [4,6,3,1,20,28,26,22];

//     $max = $smax =null;

//     for($i=0;$i < count($arr);$i++){

//         if($arr[$i] > $max){

//              $smax = $max;
//              $max = $arr[$i];

//         }else if($arr[$i] > $smax){
//             $smax = $arr[$i];
//         }
//     }

// echo "max".$max. 'smax'.$smax;


//prime

        // $num = 8;
        // $k = 0;

        // for($i=2;$i <$num; $i++){
      
        //     if($num % 2 ==0){
        //        $k++;
        //        break;
        //     }
        // }

        // if($k  == 0){
        //     echo $num.' prime';
        // }else{
        //     echo $num. ' not prime';
        // }



// factorialzation

    //     $num = 4;
    //     $fact= 1;

    //     for($i = $num; $i > 1; $i--){

    //         $fact = $i* $fact;  //
    //     }
    //        echo $fact;





        // swap

        // $a = 2;
        // $b = 3;

        // $a = $a + $b;
        // $b = $a - $b;
        // $a = $a - $b;

        // echo 'a='. $a. 'b='.$b;
       
        // $c = $a;
        // $a = $b;
        // $b = $c;

        // echo 'a='. $a. 'b='.$b;




        // $num = '54321';

        // $rev = 0;

        // while($num > 1){
        //     $rem = $num % 10;
        //     $rev = $rev *10 + $rem;
        //     $num = $num/10;
        // }
        //     echo $rev;



      //  duplicate string

        // $str = 'bhhharttiiii';

        // $arr_length = str_split($str);
        // $arr_count = array_count_values($arr_length);

        // foreach($arr_count as $k=>$val){
        //     echo $k.$val."<br>";
        // }


        // armstrong

        // // $num = 470;
        // // $sum = 0;
        // // $temp = $num;

        // // while($temp != 0){

        // //     $rem = $temp % 10;
        // //     $sum = $sum + $rem* $rem *$rem; 
        // //     $temp = $temp/10;
        // // }

        // // if($num == $sum){
        // //     echo 'armstrong';
        // // }else{
        // //     echo 'no';
        // }


        // palindrome

        $num = 111;
        $rev = 0;
        $temp= $num;

        while($num > 0){

            $rev = $rev *10 + $num%10;
            $num =(int) ($num/10);
        }
       if($rev === $temp){
          echo $temp. 'palindrome';
       }else{
         echo 'no';
       }
        

       // string in asc order

        // $str = 'bharti';

        // $length = strlen($str);

        // for($i = $length; $i >= 0;$i--){

        //    for($j = 0; $j < $i;$j++){
        //         echo $str[$j];
        //    }
        //    echo "<br>";
        // }



        // pyramid

    // $num = 8;
      
    //   for($i=0; $i <= $num; $i++){
                                
    //                             // 2 * (n-1)
    //      for($j=0; $j<= (2 *$num)-1 ; $j++){
            
    //         if($j >= $num-($i-1) && $j <= $num+($i-1)){
    //          echo '*';
    //         }else{
    //             echo '&nbsp;&nbsp;';
    //         }
    //      }

    //      echo '<br>';
    //   }

    //   for($i=$num; $i >= 0; $i--){
                                
    //                             // 2 * (n-1)
    //      for($j=0; $j<= (2 *$num)-1 ; $j++){
            
    //         if($j >= $num-($i-1) && $j <= $num+($i-1)){
    //          echo '*';
    //         }else{
    //             echo '&nbsp;&nbsp;';
    //         }
    //      }

    //      echo '<br>';
    //   }



        // x

        // $n = 5;

        // for($i=1; $i <=$n;$i++){

        //     for($j=0; $j <=$n; $j++){

        //         if($i == $j || $i+$j == $n+1){
        //             echo '*';
        //         }else{
        //             echo '&nbsp';
        //         }
        //     }
        //     echo "<br>";
        // }

    }

}
