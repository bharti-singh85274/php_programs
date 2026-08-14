<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceLogicsController extends Controller
{
    
  function hashing(){

     //Hashing is a technique used to store and retrieve data quickly by converting a key (number, string, etc.) into an index using a hash function.
     //Stores number as key and its index as value

    //  Terminology
    // Key – The value you want to store or search.
    // Hash Function – Converts a key into an index.
    // Hash Table – The data structure where values are stored.
    // Collision – When two different keys produce the same index.

    //Time Complexity:O(n)   Space Complexity:O(n)

    //Program 1: Frequency Count Using Hashing

        $arr = [4, 2, 4, 5, 2, 2, 8];

        $hash = [];

        foreach ($arr as $value)
        {
            if(isset($hash[$value]))
            {
                $hash[$value]++;
            }
            else
            {
                $hash[$value] = 1;
            }
        }

        print_r($hash);


        // Program 2: Find Duplicate Elements Using Hashing

        $arr = [3,5,2,7,5,8,3,9];

        $hash = [];

        foreach($arr as $value)
        {
            if(isset($hash[$value]))
            {
                $hash[$value]++;
            }
            else
            {
                $hash[$value]=1;
            }
        }

      foreach($hash as $key=>$count)
       {
            if($count>1)
            {
                echo $key." ";
            }
        }



        //Program 3: Find First Non-Repeating Element

        $arr = [4, 5, 1, 2, 1, 2, 5];

        $hash = [];

        foreach($arr as $value)
        {
            if(isset($hash[$value]))
            {
                $hash[$value]++;
            }
            else
            {
                $hash[$value]=1;
            }
        }

        foreach($arr as $value)
        {
            if($hash[$value]==1)
            {
                echo "First Non-Repeating = ".$value;
                break;
            }
        }



        //Program 4: Two Sum Using Hashing. Find two numbers whose sum equals the target.

            $arr = [2,7,11,15];
            $target = 9;

            $hash = [];

            foreach($arr as $index=>$value)
            {
                $need = $target - $value;

                if(isset($hash[$need]))
                {
                    echo "Indexes : ".$hash[$need]." ".$index;
                    break;
                }

                $hash[$value] = $index;
            }


      //Program 5: Find Intersection of Two Arrays
     
        $arr1 = [1,2,3,4,5];
        $arr2 = [3,4,5,6,7];

        $hash = [];

        foreach($arr1 as $value)
        {
            $hash[$value]=1;
        }

        foreach($arr2 as $value)
        {
            if(isset($hash[$value]))
            {
                echo $value." ";
            }
        }

  }




// Recursion is a programming technique where a function calls itself to solve a problem by breaking it into smaller subproblems.

// A recursive function must have:
// Base Case – The condition that stops the recursion.
// Recursive Case – The function calls itself with a smaller or simpler input.

// Backtracking- calling back the function or returning back the elements once reached base case.

  function recursion(){

  
    //Example 1: Factorial Using Recursion. The factorial of a number is: 5! = 5 × 4 × 3 × 2 × 1 = 120
    function factorial($n)
        {
            if($n == 0 || $n == 1)
            {
                return 1;
            }

            return $n * factorial($n - 1);
        }

        echo factorial(5);


     // Fibonacci Series

      function fibonacci($n)
        {
            if($n == 0)
            {
                return 0;
            }

            if($n == 1)
            {
                return 1;
            }

            return fibonacci($n - 1) + fibonacci($n - 2);
        }

        for($i = 0; $i < 8; $i++)
        {
            echo fibonacci($i)." ";
        }


        //Check Palindrome
        function palindrome($str, $start, $end)
        {
            if($start >= $end)
            {
                return true;
            }

            if($str[$start] != $str[$end])
            {
                return false;
            }

            return palindrome($str, $start + 1, $end - 1);
        }

        $str = "madam";

        if(palindrome($str,0,strlen($str)-1))
        {
            echo "Palindrome";
        }
        else
        {
            echo "Not Palindrome";
        }



     //Reverse a String
        function reverseString($str)
        {
            if(strlen($str) <= 1)
            {
                return $str;
            }

            return reverseString(substr($str,1)) . $str[0];  // coz of $str[0], chacter b goes on last
        }

        echo reverseString("hello");



        //Sum of Digits

        function sumDigits($n)
        {
            if($n == 0)
            {
                return 0;
            }

            return ($n % 10) + sumDigits(intdiv($n,10));
        }

        echo sumDigits(1234);


        //Power of a Number

        function power($x, $n)
        {
            if($n == 0)
            {
                return 1;
            }

            return $x * power($x, $n - 1);
        }

        echo power(2,5);





  }





}
