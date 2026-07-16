<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatternController extends Controller
{
    //

    function start_tri(){

        for($i=1; $i <= 5; $i++){      

            for($j=0; $j < $i; $j++){    //

                echo '*';
            }
            echo '<br>';
        }
    }


    function number(){
       
       for($i=1; $i <= 5; $i++){      

            for($j=1; $j <= $i; $j++){    //

                echo $i;
            }
            echo '<br>';
        }

    }


    function opposite_tri_number(){

       $n = 5;

        // for($i=5; $i > 1;$i--){

        //     for($j=1; $j < $i; $j++){
        //         echo '*';
        //     }
        //     echo '<br>';
        // }

      for($i = 5; $i > 0; $i--){

          for($j=0; $j < $i; $j++){

             echo $i;
          }
          echo '<br>';
      }

    }



  function pyramid(){             // Formula: (2*$n)-1

/*
              space
    *         3
   ***        2
  *****       1
 *******      0

Formula from above derived: (2*4)-1   // 4 is no of rows

*/

    $n = 4;
       for($i =1; $i <=$n; $i++){
          
          for($j =1; $j <= (2*$n)-1; $j++){

            //  1 >=  4-(1-1) 
            //  1 >= 4
            if($j >= $n-($i-1) && $j <= $n+($i-1) ){
             echo '*';
            }else{
                echo '&nbsp&nbsp;';
            }
          }

          echo '<br>';
       }

  }


  function string(){

    $string = 'bharti';
    
    $length = strlen($string);

    for($i=0; $i < $length; $i++){
                //1st iteration: $j =0 $i =0, 0<= 0 true prints B 
               //2nd iteration:  $j= 1 $i =0, 1<= 0 false prints <br>
              //3rd iteration:  $j= 0 $i =1, 0<= 1 true prints B
             //4th iteration:  $j= 1 $i =1,  1<= 1 true prints h
           // 5th iteration:  $j= 2 $i =1,   2<= 1 false prints <br>
        for($j=0; $j <= $i; $j++){

            echo " $string[$j] ";
        }
        echo '<br>';
    }


    //  for($i=$length; $i > 0; $i--){
               
    //     for($j=0; $j < $i; $j++){

    //         echo " $string[$j] ";
    //     }
    //     echo '<br>';
    // }

  }
 

  function x(){

/*
    1 2 3 4 5
1   *            // $i== $j
2     *
3       *
4         *
5           *
*/

/*
    1 2 3 4 5
1   *            // $i+$j == $n+1  =1+5 == 5+1, =2+4 == 5+1
2     *                       
3       *
4         *
5           *
*/

   $n =5;
     for($i=1; $i <=$n; $i++){

        for($j=1; $j<=$n; $j++){

             if($i ==$j || $i+$j ==$n+1 ){
                echo '*';
             } else{
                echo '&nbsp;&nbsp;&nbsp;';
             }
        }
        echo '<br>';
     }
  }



}
