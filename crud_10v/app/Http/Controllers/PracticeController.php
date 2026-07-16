<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    
    function practice(){
                      
                      // string count
         // $string = 'aabbssdsfff';

         // $split = str_split($string);

         // $count_string = array_count_values($split);

         // foreach($count_string as $k=>$val){

         //    echo $k.$val. "<br>";
         // }


                   // max and second max
  // $arr = [4, 26, 1, 23, 12, 1, 36, 115]; 

  //   $max = $smax = null; 

  //   for($i=0; $i < count($arr); $i++){

  //       if($max === null || $arr[$i] > $max){

  //           $smax = $max;
  //           $max = $arr[$i];
        
  //       } else if($smax === null || $arr[$i] > $smax){
  //            $smax = $arr[$i];
  //       }
  //   }
  //   echo 'max'.$max. ' '.'smax'.$smax;

  // }


                       // duplicate values

      // $arr = [4,2,4,6,7,6,6];

      // for($i =0; $i < count($arr); $i++){

      //     for($j = $i+1; $j < count($arr); $j++){

      //         if($arr[$i] == $arr[$j]){

      //             echo ' Duplicate element: '.$arr[$j];
      //         }
      //     }
      //           echo "<br>";
      // }




                     // Prime no.

  //   $num = 13;
  //   $n = 0;

  //   for($i=2; $i < $num; $i++){

  //       if($num % 2 == 0){
  //          $n++;
  //          break;
  //       }
  //   }

  //   if($n == 0){
  //      echo $num. 'prime ';
  //   }else{ 
  //       echo $num. 'not prime ';
  //   }

  // }


                  // factorization

    //   $n = 4;  //( 4*3*2*1)
    //   $fact = 1;

    //   for($i = $n; $i >1; $i--){
    //       $fact = $i * $fact;
    //   }
       
    //    echo $fact;
    // }
     
             

             // Reverse String

   //    $str = 'bharti';

   //    $length = strlen($str);

   //    for($i = $length-1; $i >=0; $i--){
   //        echo $str[$i];
   //    }
   // }



           // MID value 

      // $arr = [2,5,3,5,6,4,5];

      // $count = count($arr);

      // $med = $count/2;
      
      // $int_val = (int) $med;
      
      // $mid = $arr[$int_val];

      // echo $mid;




      // swap
             
             // without using third var
      // $a = 10;
      // $b = 11;

      // $a = $a + $b;
      // $b = $a - $b;
      // $a = $a - $b;

      // echo 'a='.$a. 'b='.$b;


    //   $a = 11;
    //   $b = 14;
     
    //   $c = $a;
    //   $a = $b;
    //   $b = $c;
     
    //  echo 'a='.$a. 'b='.$b;

    // } 

          //while loop

  // $i = 1;
  //  while($i <=5){

  //    echo $i;
  //     $i++;
  //    }


        // do while loop

   // $i =1;
   //  do{

   //   echo $i;
   //     $i++;

   //  }while($i <=5);


        // switch case

    // $color = 'red';

    // switch ($color) {
    //        case 'red':
    //         echo 'color is red';
    //         break;

    //         case "yellow":
    //         echo 'color is green';
    //         break;

    //         case 'blue':
    //         echo 'color is blue';
    //         break;

    //         default:
    //         echo 'no color';
    //         break;
    //         }

     
                    // B LETTER
    // $n = 5;
    
    // for($i= 1; $i <= $n; $i++){

    //     for($j= 1;$j <=$n; $j++){

    //         if($i==1 && $j ==1){
    //             echo '*';
    //         }else if($i ==2 && $j ==2 || $i==2 && $j==3 || $i==2 && $j==4 || $i==4 && $j==2 ||$i==4 && $j==3 || $i==4 && $j==4 || $i==1 && $j==5 || $i==5 && $j==5){
    //             echo '&nbsp ';
    //         }
    //         else{
    //             echo "*";
    //         }
          
    //     }
    //    echo "<br>";  
    // } 





           // S LETTER
   $n =5;

   for($i=1; $i <=$n; $i++){

     for($j=1; $j <=$n; $j++){
        if($i ==2 && $j ==2 || $i==2 && $j==3 || $i==2 && $j==4 || $i==2 && $j==5 || $i==4 && $j==1 || $i==4 && $j==2 || $i==4 && $j==3 || $i==4 && $j==4 || $i==1 && $j==1 || $i ==5 && $j==5){

          echo "&nbsp; ";
        }else{
            echo $j;
        }
     }
      echo "<br>";
   }


   }

}