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


         // WITHOUT USING ANY PHP FUNCTION
        //     $str = "bharti";
        //     $length = 0;

        //     for($j=0; isset($str[$j]); $j++){
        //     $length++;
        // }

        //     for($i = $length-1; $i >= 0; $i--){
        //     echo $str[$i];
        // }


    }

    function midvalue(){

        $arr = [2,5,3,6,4];

        $count = count($arr);

        $mid = $count/2;
        
        $int_val = (int) $mid;

        return $mid_val = $arr[$int_val];
        
    }


    function duplicate_value(){
         
           //using forloop helps you understand the logic behind duplicate removal before relying on built-in functions.
        $arr = [2,2,3,5,2,2,6,3,3,5];
        $length = count($arr);

        for($i = 0; $i < $length; $i++){

                  //duplicates are skipped using $found.
            $found = false;

            // Check if this value already appeared before
            for($k = 0; $k < $i; $k++){  
                                         
                if($arr[$i] == $arr[$k]){
                    $found = true;
                    break;
                }
            }
            if($found){
                continue;
            }

            // Check if it appears later
            for($j = $i + 1; $j < $length; $j++){
                if($arr[$i] == $arr[$j]){
                    echo $arr[$i]."<br>";
                    break;
                }
            }
        }


    }


    public function remove_duplicate(){

    $arr = [2,2,3,5,2,2,6,3,3,5];
    $length = count($arr);

    $result = [];

    for($i = 0; $i < $length; $i++){

        $duplicate = false;

        // Check if current value is already in result array
        for($j = 0; $j < count($result); $j++){

            if($arr[$i] == $result[$j]){
                $duplicate = true;
                break;
            }

        }

        // Store only if it is not duplicate
        if($duplicate == false){
            $result[] = $arr[$i];
        }

    }

    print_r($result);


    // Easier Version using foreach

    // $arr = [2,2,3,5,2,2,6,3,3,5];
    // $result = [];

    // foreach($arr as $value){

    //     if(!in_array($value, $result)){
    //         $result[] = $value;
    //     }
    // }
    // print_r($result);


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

        $max = $smax = $min = null;

        for ($i = 0; $i < count($arr); $i++) {

            // Find Minimum
            if ($min === null || $arr[$i] < $min) {
                $min = $arr[$i];
            }

            // Find Maximum
            if ($max === null || $arr[$i] > $max) {

                $smax = $max;
                $max = $arr[$i];

            }
            // Find Second Maximum
            elseif ($arr[$i] != $max && ($smax === null || $arr[$i] > $smax)) {

                $smax = $arr[$i];
            }
        }

        echo "Minimum = $min <br>";
        echo "Maximum = $max <br>";
        echo "Second Maximum = $smax";


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

    if($num <= 1){
    echo $num . " is not prime";
    }else{
    for($i =2; $i < $num; $i++){   // $i = 2 or more than 2 but never less than 2 for right output
       
       if($num % $i == 0){
          $n++;     //comes here only when condition is false, by adding 1 in n value from 0
          break;
        }
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

                    // 0,1 to 9, 370,371,407
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
        $num = (int)($num/10);
    }

        echo $rev;
    
  }


  function sum_array(){
     
                //Sum of array elements
     $arr = [2,4,6,8];   // 20

    $length = count($arr);
    $count = 0;

    for($i=0; $i < $length; $i++){

    $count+= $arr[$i];

    }
    echo $count;

  }


  function sum_digits(){

    //This is one of the most common DSA interview questions. The idea is to repeatedly extract the last digit using % 10 and then remove that digit using integer division by 10.
    $num = 12345;
    $sum = 0;

    while ($num > 0) {

        $digit = $num % 10;      // Get last digit
        $sum += $digit;          // Add it to sum
        $num = (int)($num / 10); // Remove last digit

    }

    echo $sum;


  }


               // Using formula
  function missing_no(){
      
     $arr = [1,2,3,5];

     $n = count($arr) + 1;  //Because one number is missing.
 
     $expectedSum = $n * ($n + 1) / 2;   // 15 (sum formula)

     $actualSum = 0;

     foreach($arr as $value){
        $actualSum += $value;     // 11
     }

     $missing = $expectedSum - $actualSum;  //4

     echo "Missing Number = " . $missing;



        // Without Formula
        $arr = [1,2,3,5,6];
        $max = max($arr);

            for($i = 1; $i <= $max; $i++)
            {
                if(!in_array($i, $arr))
                {
                    echo $i;
                    break;
                }
            }


      //Find Missing Number Using XOR
        $arr = [1,2,4,5];

        $n = count($arr)+1;

        $x1 = 0;
        $x2 = 0;

        for($i=1;$i<=$n;$i++)
        {
            $x1 ^= $i;
        }

        foreach($arr as $value)
        {
            $x2 ^= $value;
        }
        echo $x1 ^ $x2;




        //Multiple Missing Numbers
        $arr = [1,2,4,6,8];

        $max = max($arr);

        for($i=1;$i<=$max;$i++)
        {
            if(!in_array($i,$arr))
            {
                echo $i . "<br>";
            }
        }



  }





  function move_to_end(){
      
                  //Move all zeros to end
        $arr = [1,0,2,0,3,4];

        $index = 0;    //Because we want to start filling the array from the first position.So we always start at 0. Think of $index as an empty box pointer.

        // Move all non-zero elements to the front
        for($i = 0; $i < count($arr); $i++)
        {
            if($arr[$i] != 0)
            {
                $arr[$index] = $arr[$i];  // $arr[index] value will be replaced by arr[$i] everytime conditon true
                $index++;    // to go to next element (The pointer ($index) always tells you the next free position where a non-zero element should be placed.)
            }
        }

        // Fill remaining positions with zeros
        while($index < count($arr))
        {
            $arr[$index] = 0;
            $index++;
        }

        print_r($arr);


  }



  function anagram(){

     //Two strings are anagrams if:

    // They contain the same characters
    // The frequency of every character is the same
    // The order does not matter

     $str1 = "listen";
     $str2 = "silent";

     if(strlen($str1) != strlen($str2))
     {
        echo "Not Anagram";
        exit;
     }

     $arr1 = str_split($str1);
     $arr2 = str_split($str2);

     sort($arr1);
     sort($arr2);

     if($arr1 == $arr2)
     {
        echo "Anagram";
     }
     else
     {
        echo "Not Anagram";
     }

  }


  function rotate_array(){       // rotates like a paper from behind, so last elemnts shows first by given k value and first elements shows last

      $arr = [23, 25, 21,22,15];
        $n = count($arr);
        $k = 3;

        // If k is greater than array size
        $k = $k % $n;  //If k is greater than the array size, rotating more than one full cycle is unnecessary

        $result = [];      

        for($i = 0; $i < $n; $i++)
        {
            $result[($i + $k) % $n] = $arr[$i];   //# POINTS TO REMEMBER [formula]
        }

        ksort($result); //During the loop, elements are inserted in this order:
        // Iteration 1 → Index 3
        // Iteration 2 → Index 4
        // Iteration 3 → Index 0
        // Iteration 4 → Index 1
        // Iteration 5 → Index 2

        // 3 => 23
        // 4 => 25
        // 0 => 21
        // 1 => 22
        // 2 => 15
        //If you print it immediately: print_r($result); Output may appear as:
        // Array
        // (
        //     [3] => 23
        //     [4] => 25
        //     [0] => 21
        //     [1] => 22
        //     [2] => 15
        // )

        //Using: ksort($result);  sorts the array by its keys (indexes):
        // 0 => 21
        // 1 => 22
        // 2 => 15
        // 3 => 23
        // 4 => 25


        print_r($result); 

  }


  function count_frequency_array(){
      
     $arr = [2,4,2,5,4,2];

        $freq = [];  // because $arr already stores the original numbers.So we create another array This new array will store Number → Frequency.
                     //This array will store: Key = Array element and Value = Frequency

        foreach($arr as $value)
        {
            if(isset($freq[$value]))   // check the given $value exists in $freq = [],if not go to else part. Step after step it will start getting values in key value form
            {
                $freq[$value]++;    // it means +1
            }
            else
            {
                $freq[$value] = 1;     // here, $freq[$value] it becomes key and = 1 value
            }
        }

        print_r($freq);



        // Find Maximum Frequency Element
       
        $arr = [2,2,3,5,2,2,6,3,3,5];

        $freq = [];

        // Count frequency
        foreach($arr as $value)
        {
            if(isset($freq[$value]))
            {
                $freq[$value]++;
            }
            else
            {
                $freq[$value] = 1;
            }
        }

        $maxFreq = 0;
        $maxElement = "";

        foreach($freq as $key => $count)
        {
            if($count > $maxFreq)
            {
                $maxFreq = $count;
                $maxElement = $key;
            }
        }

        echo "Maximum Frequency Element = ".$maxElement."<br>";
        echo "Frequency = ".$maxFreq;



        //Find Minimum Frequency Element

        $arr = [2,2,3,5,2,2,6,3,3,5];

        $freq = [];

        // Count frequency
        foreach($arr as $value)
        {
            if(isset($freq[$value]))
            {
                $freq[$value]++;
            }
            else
            {
                $freq[$value] = 1;
            }
        }

        // Initialize with first element of frequency array
        $minFreq = PHP_INT_MAX;
        $minElement = "";

        foreach($freq as $key => $count)
        {
            if($count < $minFreq)
            {
                $minFreq = $count;
                $minElement = $key;
            }
        }

        echo "Minimum Frequency Element = " . $minElement . "<br>";
        echo "Frequency = " . $minFreq;



  }



  function sum(){

      //two numbers whose sum is equal to the target.
      $arr = [2,7,11,15];
      $target = 9;

        $length = count($arr);

        for($i = 0; $i < $length-1; $i++)
        {
            for($j = $i+1; $j < $length; $j++)  //$j+1 (Start checking only AFTER the current element,saves time and from extra unnecssary comparisons)
            {
                if($arr[$i] + $arr[$j] == $target)
                {
                    echo "Numbers: ".$arr[$i]." + ".$arr[$j]." = ".$target;
                    break 2; // Exit both loops
                }
            }
        }



     //First Occurrence [Ques 2]
       $arr = [2,4,6,4,7,4];

        $search = 4;

        for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i]==$search)
            {
                echo "First occurrence at index ".$i;
                break;
            }
        }


    // Last Occurrence  [Ques 3]
    $arr = [2,4,6,4,7,4];

    $search = 4;

    for($i=count($arr)-1;$i>=0;$i--)
    {
        if($arr[$i]==$search)
        {
            echo "Last occurrence at index ".$i;
            break;
        }
    }



    //Search Using array_search()  [Ques 3]
    $arr = [10,20,30,40];

    $index = array_search(30, $arr);

    if($index == true)
    {
        echo "Found at index ".$index;
    }
    else
    {
        echo "Not Found";
    }



    //Search Using in_array()
    $arr = [5,10,15,20];

    if(in_array(15,$arr))
    {
        echo "Found";
    }
    else
    {
        echo "Not Found";
    }



    // Find All Occurrences
    $arr = [2,4,6,4,7,4];

    $search = 4;

    for($i=0;$i<count($arr);$i++)
    {
        if($arr[$i]==$search)
        {
            echo "Found at index ".$i."<br>";
        }
    }



    //Count Occurrences
    $arr = [2,4,6,4,7,4];

    $search = 4;

    $count = 0;

    foreach($arr as $value)
    {
        if($value == $search)
        {
            $count++;
        }
    }

    echo "Total Occurrences = ".$count;



   //Search String
    $arr = ["Apple","Banana","Orange","Mango"];

    $search = "Orange";

    foreach($arr as $key=>$value)
    {
        if($value==$search)
        {
            echo "Found at index ".$key;
            break;
        }
    }



  }



  function binary_search(){

     //Binary Search is much faster than Linear Search: instead of checking every element one by one, it repeatedly discards half of the remaining search range until the target is found

        $arr = [5,10,15,20,25,30,35];
        $search = 25;

        $low = 0;
        $high = count($arr)-1;   //= 6. Why minus 1? Because indexes start from 0, not 1
 
        while($low <= $high)   //Keep searching until the searching range becomes empty
        {
            $mid = floor(($low+$high)/2);     //# POINT TO REMEMBER

            if($arr[$mid] == $search)         //# POINT TO REMEMBER
            {
                echo "Found at index ".$mid;
                break;
            }
            elseif($search > $arr[$mid])
            {
                $low = $mid + 1;   // If the searched value is greater than the middle value, everything from low to mid is too small (so +1), so we start searching after mid
            }
            else
            {
                $high = $mid - 1;  //If the searched value is smaller than the middle value, everything from mid to high is too large (so -1), so we stop searching before mid
            }
        }

  }



  function linear_search(){

      // Works on any array sorted or unsorted
     $arr = [12, 5, 30, 9, 18];
        $search = 9;

        $found = false;

        for($i = 0; $i < count($arr); $i++)
        {
            if($arr[$i] == $search)
            {
                echo "Found at index ".$i;
                $found = true;
                break;
            }
        }

        if(!$found)
        {
            echo "Element not found";
        }

  }




//-------------------------------------  SORTING PROGRAMS  --------------------------------------/
//Note: Bubble,Selection,Insertion(But Insertion is lil opposite to bubble & selection) is similar and quick & merge is smiliar including functions in both programs





  function bubble_sort(){
   //Bubble sort- it repeatedly compares the adjacent elements in a list or array and swaps them if they are in the wrong order.this process continues until the list is completely sorted. 

    //   The idea behind the loop conditions
    // $i < $n - 1: We need at most n - 1 passes to sort n elements. A final pass would do no useful work.
    // $j < $n - $i - 1:
    // - $i skips the elements that are already sorted at the end of the array.
    // - 1 ensures that $arr[$j + 1] is always a valid index, avoiding an out-of-bounds access.

    // This optimization is what makes Bubble Sort more efficient than always comparing every pair on every pass.

    //Initial array : 5 3 8 4 2
    //Pass 1:i = 0
    // Need to compare
    // 5-3
    // 3-8
    // 8-4
    // 4-2     // Total comparisons 4

    //After Pass 1:  3 5 4 2 8

    //Pass 2: i = 1
    // Now compare only
    // 3-5
    // 5-4
    // 4-2       //We skip comparing with 8 because it's already sorted.

    //After Pass 2:  3 4 2 5 8      // Now 5 8 are fixed.

    //Pass 3: i = 2
    // Compare only
    // 3-4
    // 4-2

    //After Pass 3:  3 2 4 5 8     // Now 4 5 8  are fixed.

    //Pass 4: i = 3
    //Compare only
    //3-2



     $arr = [5,3,8,4,2];
        $n = count($arr);

        for($i=0; $i<$n-1; $i++)
        {
            for($j=0; $j<$n-$i-1; $j++)    //# Things to remember
            {
                if($arr[$j] > $arr[$j+1])   //# Things to remember ">"
                {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }

        print_r($arr);

  }




  function selection_sort(){

  // its a comparison based sorting algorithm that repeatedly finds the smallest element from the unsorted part of list nd places it at the begining. this process continues until the entire list is sorted    

    $arr = [64,25,12,22,11];
    $n = count($arr);

    for($i=0; $i<$n-1; $i++)   //-1 cz last element already get sorted after swappig
    {
        $min = $i;     // bcz this algo firstly finds the smallest element nd index only

        for($j=$i+1; $j<$n; $j++)
        {
            if($arr[$j] < $arr[$min])    //#Things to Remember
            {
                $min = $j;              //#Things to Remember
            }
        }

        $temp = $arr[$i];              //#Things to Remember
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }

    print_r($arr);

  }


  function insertion_sort(){

     //builds the sorted array one element at a time. It takes one element (called the key) and inserts it into its correct position among the already sorted elements on its left.

    $arr = [12, 11, 13, 5, 6];
    $n = count($arr);

    for($i = 1; $i < $n; $i++)
    {
        $key = $arr[$i];
        $j = $i - 1;    // Insertion Sort always compares the key with the previous elements.

        while($j >= 0 && $arr[$j] > $key)      //#Things to Remember
        {
            $arr[$j + 1] = $arr[$j];          //#Things to Remember
            $j--;
        }

        $arr[$j + 1] = $key;                  //#Things to Remember
    }

    echo "Sorted Array: ";
    foreach($arr as $value)
    {
        echo $value . " ";
    }


  }


//   Why Merge Sort is Different from Bubble, Selection, and Insertion Sort
// Bubble Sort: Repeatedly swaps adjacent elements.
// Selection Sort: Finds the smallest element and places it at the correct position.
// Insertion Sort: Inserts each element into its correct position within the already sorted part of the array.
// Merge Sort: First divides the array into smaller arrays, then merges them back together in sorted order. It uses extra memory but guarantees O(n log n) time in the best, average, and worst cases.

function merge_sort(){

         // Demo to understand in short
    $left  = [27, 38, 43];
    $right = [3, 9, 10, 82];

    $result = [];

    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right))
    {
        if ($left[$i] < $right[$j])
        {
            $result[] = $left[$i];
            $i++;
        }
        else
        {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left))
    {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right))
    {
        $result[] = $right[$j];
        $j++;
    }

    print_r($result);


    // Full Program starts here

    function mergeSort($arr)
    {
        // If array has only one element, it is already sorted.
        if(count($arr) <= 1)
        {
            return $arr;
        }

        // Find middle position.
        $mid = floor(count($arr) / 2);

        // Divide array into left and right parts.
        $left = array_slice($arr, 0, $mid);  //Start from index 0, Copy 3 elements
        $right = array_slice($arr, $mid);  //Start at index 3 and copy everything until the end.

        // Sort both halves recursively.
        $left = mergeSort($left);
        $right = mergeSort($right);

        // Merge the two sorted halves.
        return merge($left, $right);
    }

    function merge($left, $right)
    {
        $result = [];

        $i = 0;
        $j = 0;

        while($i < count($left) && $j < count($right))    //# Things to Remember
        {
            if($left[$i] < $right[$j])
            {
                $result[] = $left[$i];
                $i++;
            }
            else
            {
                $result[] = $right[$j];
                $j++;
            }
        }

        while($i < count($left))
        {
            $result[] = $left[$i];
            $i++;
        }

        while($j < count($right))
        {
            $result[] = $right[$j];
            $j++;
        }

        return $result;
    }

    $arr = [38, 27, 43, 3, 9, 82, 10];

    $sorted = mergeSort($arr);

    echo "Sorted Array: ";

    foreach($sorted as $value)
    {
        echo $value." ";
    }


  

}


function quick_sort(){

// Quick Sort is a divide and conquer sorting algorithm.

// It works by:

// Selecting one element as a pivot.
// Placing smaller elements on the left side of the pivot.
// Placing larger elements on the right side of the pivot.
// Repeating the same process for the left and right parts until the array is sorted.
   
  $arr = [10, 7, 8, 9, 1, 5];

    $n = count($arr);

    function quickSort($arr)
    {
        $size = count($arr);

        // If array has 0 or 1 element, it is already sorted
        if($size <= 1)
        {
            return $arr;
        }

        // Selecting first element as pivot
        $pivot = $arr[0];

        $left = [];
        $right = [];


        // Divide array into left and right
        for($i = 1; $i < $size; $i++)            // One loop used only
        {
            if($arr[$i] < $pivot)                //# Things to Remember
            {
                $left[] = $arr[$i];
            }
            else
            {
                $right[] = $arr[$i];
            }
        }


    // Sort left and right parts again
    return array_merge(                         //# Things to Remember
        quickSort($left),
        [$pivot],
        quickSort($right)
    );
}


    $arr = quickSort($arr);


    echo "Sorted Array: ";

    foreach($arr as $value)
    {
        echo $value . " ";
    }


}




function heap_sort(){

  
// Heap Sort is a comparison-based sorting algorithm that uses a special binary tree called a Heap to sort elements.

// It first converts the array into a Max Heap, then repeatedly removes the largest element (the root), places it at the end of the array, and rebuilds the heap until the array is sorted.
// Ascending order → Use Max Heap
// Descending order → Use Min Heap

// Heap: A Heap is a Complete Binary Tree.
// Every level is completely filled except possibly the last.
// The last level is filled from left to right.

// There are two types:
// 1. Max Heap- Parent is always greater than or equal to its children.
// 2. Min Heap- Parent is always smaller than its children.

  
   
// Things to remember: 2 loops used, 2 functions used where in 2nd function calls 1st function twice in both loops. Three formulas used: floor(count($arr) / 2) - 1, $left = 2 * $i + 1;,$right = 2 * $i + 2;

  function heapify(&$arr, $n, $i) // Rule to remember for interviews: Use & (pass by reference) when a function needs to modify the original variable passed to it. If a function only needs to read the data and not change it, you generally don't need &.

{
    $largest = $i;

    $left = 2 * $i + 1;

    $right = 2 * $i + 2;

    // Check left child
    if ($left < $n && $arr[$left] > $arr[$largest])
    {
        $largest = $left;
    }

    // Check right child
    if ($right < $n && $arr[$right] > $arr[$largest])
    {
        $largest = $right;
    }

    // If largest is not root
    if ($largest != $i)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $temp;

        // Heapify affected subtree
        heapify($arr, $n, $largest);
    }
}

function heapSort(&$arr)
{
    $n = count($arr);

    // Build Max Heap
    for ($i = floor($n / 2) - 1; $i >= 0; $i--)
    {
        heapify($arr, $n, $i);
    }

    // Extract elements
    for ($i = $n - 1; $i > 0; $i--)
    {
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        heapify($arr, $i, 0);
    }
}

    $arr = [4,10,3,5,1];

    echo "Original Array:<br>";
    print_r($arr);

    heapSort($arr);

    echo "<br><br>Sorted Array:<br>";
    print_r($arr);



}


}
