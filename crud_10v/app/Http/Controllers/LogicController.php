<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    
 
    function reverse_string(){

        $string = 'bharti';

        $length = strlen($string);

        for($i=$length-1; $i >= 0; $i--){

            echo $string[$i];
        }
    }

    function midvalue(){

        $arr = [2,5,3,6,4];

        $count = count($arr);

        $mid = $count/2;
        
        $int_val = (int) $mid;

        return $mid_val = $arr[$int_val];
        
    }


    function duplicate_value(){

         //  Array ( [0] => 3 [1] => 5 [2] => 2 [5] => 9 ),  (unique)

                                        //Array ( [0] => 3 [1] => 5 [2] => 2 [3] => 5 [4] => 3 [5] => 9 )     (diff_assoc)

      // $find_duplicate = array_diff_assoc($arr, array_unique($arr));

      // print_r($find_duplicate);
       
       $num = [2,3,4,4,6,2];

       $length = count($num);

       for($i =0; $i < $length; $i++){

          for($j=$i+1; $j< $length; $j++){   // 0 == 1, 0 == 2, 0 == 3, 0 == 4, 0 == 5, 0 == 6false
                                             // 1 == 2, 1 == 3,
            if($num[$i] == $num[$j]){
               echo $num[$j];
            }
          }
          echo "<br>";
       }
    }


    function duplicate_string(){

      $data = "aabbbbccddddzz";

      $array = str_split($data);   // Splits string into indexes

      $d = array_count_values($array); // Count no. of times values in string

      foreach($d as $k=> $val){
            echo $k. ' '.$val. '<br>';
      }



    }

   function max_smax(){
  
     // THIS IS THE RIGHT CODE WITH RIGHT OUTPUTrrrrrrrrrrrrrrrrr

        $arr = [4, 26, 1, 23, 12, 1, 116, 15]; 

        $max = $smax = null;  // Set both to null initially

        for($i = 0; $i < count($arr); $i++) {
            if ($max === null || $arr[$i] > $max) {  // Handle the first element properly
                $smax = $max;  // Update second max before updating max
                $max = $arr[$i];
            } elseif ($smax === null || $arr[$i] > $smax) {  // Update second max when a new candidate is found
               // if ($arr[$i] != $max) {  // Ensure $smax is not equal to $max
                    $smax = $arr[$i];
                //}
            }
        }

        echo 'max: ' . $max . ', smax: ' . $smax;

   }


      function swap(){

        
      // swap no 3rd variable
        // $a = 200;
        // $b = 300;

        // $a = $a + $b;
        // $b = $a - $b;

        // $a = $a - $b;

        // echo 'a ='.$a. ' ' .'b ='.$b;


     // swap using 3rd variable

       $a = 100;
       $b = 200; 

       $c = $a;
       $a = $b;
       $b = $c;
       
       echo  'a='.$a. ' ' .'b='.$b;
    }


    function table(){
        $num = 2;
        $n;
        for($i=1; $i <= 10;$i++){
             echo $num * $i. "<br>";
        }

    }

  
  function even_odd(){    // no divisible by 2 is even else odd

     $num = 13;

     if($num % 2 == 0){

         echo $num. ' ' .'even';
     }else{
         echo $num. ' ' .'odd';
     }
  }


  function prime(){     // no which has only 1 factor eg 2,5,7,11,13,19
    
    $num = 2;
    $n = 0;

    for($i =2; $i < $num; $i++){   // $i = 2 or more than 2 but never less than 2 for right output
       
       if($num % 2 == 0){
          $n++;     //comes here only when condition is false, by adding 1 in n value from 0
          break;
       }
    }

    if($n == 0){
        echo $num ." ". "prime";
    }else{
        echo $num ." ". "not prime";
    }

  }


  function factorial(){     // 4! = 4*3*2*1 = 24, 6! = 6*5*4*3*2*1 = 720

     $n = 4;

     $factor = 1;

     for($i = $n; $i >= 1; $i--){
         $factor = $i * $factor;

     }
    echo $factor;
  }

                    // 0,1, 370,371
                   //no is equal to the 'sum' of 'cubes' of its digits:3*3*3 + 7*7*7 + 1*1*1 = 371
  function armstrong(){   
     
     $num = 470;
     $sum = 0;
     $temp = $num;
     
     while($temp!=0){

        $rem = $temp % 10;
        $sum = $sum + $rem* $rem *$rem;
        $temp = $temp/10; 
     }

     if($num == $sum){
        echo $num. ' '. 'armstrong';
     }else{
        echo $num. ' '. 'not armstrong';
     }

  }



//     The while loop in your code will run 3 times. Here's the breakdown of each iteration based on the initial value of $num = 371:

// Initial conditions:
// $num = 371
// $temp = 371 (since $temp is initialized with the value of $num)

// First iteration:
// 1.  $temp = 371
// The modulus operation ($temp % 10) gives 1 as the remainder.
// The sum of the cubes of the digits is updated: 
// (1)3 = 1
// $sum = 1
// $temp is divided by 10, so $temp = 37.1, but in PHP, this will result in 37 (because it's an integer division).

// Second iteration:
// 2.  $temp = 37
// The modulus operation ($temp % 10) gives 7 as the remainder.
// The sum of the cubes of the digits is updated: 
// (7)3 =343
// $sum = 1 + 343 = 344.
// $temp is divided by 10, so $temp = 3.7, which results in 3.

// Third iteration:
// 3. $temp = 3
// The modulus operation ($temp % 10) gives 3 as the remainder.
// The sum of the cubes of the digits is updated: 
// (3)3 = 27
// $sum = 344 + 27 = 371.
// $temp is divided by 10, so $temp = 0.3, which results in 0.
// Conclusion:
// The while loop terminates when $temp becomes 0, which happens after the third iteration.
// Total iterations: 3 times, corresponding to each digit of the number 371.



                    //palindrom no. 101,111,121,131,141,151,161,171,202 (reverse of num is equal)

  function palindrome(){ 

    $num = 101;
    $rev = 0;
    $temp = $num;

    while($num > 0){

        $rev = $rev *10 + $num % 10;
        $num = (int) ($num/10);
    }

    if($rev == $temp){
       
       echo $temp. ' '. 'palindrome';
    }else{
        echo $temp. ' '. 'not palindrome';
    }

  }


  

//   Let's break down the code step by step to determine how many times the loop will run:
//   The loop will continue as long as $num is not equal to 0.
// In each iteration, the last digit of $num is added to $revnum, and $num is reduced by removing the last digit.
// Iteration Breakdown:
// Initial value of $num is 121.
// 1. First iteration:

// $revnum = 0 * 10 + 121 % 10 = 1 (last digit is 1).
// $num = (int)(121 / 10) = 12.
// 2. Second iteration:

// $revnum = 1 * 10 + 12 % 10 = 12 (last digit is 2).
// $num = (int)(12 / 10) = 1.
// 3. Third iteration:

// $revnum = 12 * 10 + 1 % 10 = 121 (last digit is 1).
// $num = (int)(1 / 10) = 0.
// Now that $num is 0, the loop stops.


//   Conclusion:
// The loop will run 3 times because there are 3 digits in the number 121. Each iteration processes one digit of the number.




  function fibonacci(){

       // 0 1 1 2 3 5 8 13 21 34  (previous two elements added to get next element)
      
     $n1 = 0;
     $n2 = 1;

     $n = 10;
     $counter = 0;

     while($counter < $n){
          
         echo $n1;
         $n3 = $n2 + $n1;
         $n1 = $n2;
         $n2 = $n3;

         $counter = $counter + 1;
     }
     
  }


  function reverse_no(){     // Similar to armstrong logic and lil bit of palindrom

    $num = 67823;
    $rev = 0;

    while($num > 1){
        
        $rem = $num % 10;
        $rev = $rev * 10 + $rem;
        $num = $num/10;
    }

        echo $rev;
    
  }



}
