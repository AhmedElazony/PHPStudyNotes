<?php

/*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In First Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */

  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_merge($merge_one, $merge_two)); // overrides the value of key "One"
  echo '</pre>';

  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];

  echo '<pre>';
  print_r(array_merge($merge_three, $merge_four)); // renumbers the numbered indexes
  echo '</pre>';

  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_replace($main, $replace)); // overrides the value of key "One"
  echo '</pre>';

  echo '<pre>';
  print_r(array_replace($merge_three, $merge_four)); // replaces only the value of index 10
  echo '<pre>';

  $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  echo $nums[array_rand($nums)]; // returns one random key by default

  echo '<pre>';
  print_r(array_rand($nums, 3)); // returns an array of 3 random keys
  echo '</pre>';

  shuffle($nums); // exchanges the array elements
  echo '<pre>';
  print_r($nums);
  echo '</pre>';

	// =------------------------------------------------------------------=

	/*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element At The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */

  $chars = ['A', 'B', 'C', 'D'];

  $first = array_shift($chars); // A
  echo "$first<br>"; // A

  echo '<pre>';
  print_r($chars); // ['B', 'C', 'D']
  echo '</pre>';

  $last = array_pop($chars); // D
  echo "$last<br>"; // D

  echo '<pre>';
  print_r($chars); // ['B', 'C']
  echo '</pre>';

  array_push($chars, 'X', 'Y', 'Z'); // ['B', 'C', 'X', 'Y', 'Z']
  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $chars[] = '1'; // add element to the end of the array
  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars, 'One', 'Two', 'Three'); // adds them to the beginning of the array
  echo '<pre>';
  print_r($chars);
  echo '</pre>';

	// =------------------------------------------------------------------=	

	/*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Has String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */

  $chars = ["A", "B", "C", "D", "E", "F", "G"];
  $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  echo '<pre>';
  print_r(array_slice($chars, 2)); // slices from "C" to End
  print_r(array_slice($chars, -4)); // slices from "D" to End
  print_r(array_slice($chars, 2, 3)); // slices from "C" to "E"
  print_r(array_slice($chars, 2, -3)); // slices from "C" to "D"
  echo '</pre>';

  echo '<pre>';
  print_r(array_slice($chars_with_string_keys, 0, 2)); // preserves keys
  print_r(array_slice($chars_with_numeric_keys, 0, 2)); // resets keys 
  print_r(array_slice($chars_with_numeric_keys, 0, 2, true)); // preserves keys 
  echo '</pre>';

  echo '<pre>';
  print_r($chars); // the original array didn't be affected
  echo '</pre>';

  $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  echo '<pre>';
  print_r(array_splice($nums, 2, 3)); // removes these elements from the array
  print_r($nums); // the original array affected by the splice
  echo '</pre>';

  echo '<pre>';
  print_r(array_splice($nums, 2, 3, ["One", "Two"])); // replaces the elements by the array passed
  print_r($nums);
  echo '</pre>';
	
  // =-------------------------------------------------------------------------------------=

  /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In First Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */

  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_merge($merge_one, $merge_two)); // overrides the value of key "One"
  echo '</pre>';

  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];

  echo '<pre>';
  print_r(array_merge($merge_three, $merge_four)); // renumbers the numbered indexes
  echo '</pre>';

  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_replace($main, $replace)); // overrides the value of key "One"
  echo '</pre>';

  echo '<pre>';
  print_r(array_replace($merge_three, $merge_four)); // replaces only the value of index 10
  echo '<pre>';

  $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  echo $nums[array_rand($nums)]; // returns one random key by default

  echo '<pre>';
  print_r(array_rand($nums, 3)); // returns an array of 3 random keys
  echo '</pre>';

  shuffle($nums); // exchanges the array elements
  echo '<pre>';
  print_r($nums);
  echo '</pre>';

	// =------------------------------------------------------------------=

	/*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element At The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */

  $chars = ['A', 'B', 'C', 'D'];

  $first = array_shift($chars); // A
  echo "$first<br>"; // A

  echo '<pre>';
  print_r($chars); // ['B', 'C', 'D']
  echo '</pre>';

  $last = array_pop($chars); // D
  echo "$last<br>"; // D

  echo '<pre>';
  print_r($chars); // ['B', 'C']
  echo '</pre>';

  array_push($chars, 'X', 'Y', 'Z'); // ['B', 'C', 'X', 'Y', 'Z']
  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  $chars[] = '1'; // add element to the end of the array
  echo '<pre>';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars, 'One', 'Two', 'Three'); // adds them to the beginning of the array
  echo '<pre>';
  print_r($chars);
  echo '</pre>';

	// =------------------------------------------------------------------=	

	/*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Has String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */

  $chars = ["A", "B", "C", "D", "E", "F", "G"];
  $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  echo '<pre>';
  print_r(array_slice($chars, 2)); // slices from "C" to End
  print_r(array_slice($chars, -4)); // slices from "D" to End
  print_r(array_slice($chars, 2, 3)); // slices from "C" to "E"
  print_r(array_slice($chars, 2, -3)); // slices from "C" to "D"
  echo '</pre>';

  echo '<pre>';
  print_r(array_slice($chars_with_string_keys, 0, 2)); // preserves keys
  print_r(array_slice($chars_with_numeric_keys, 0, 2)); // resets keys 
  print_r(array_slice($chars_with_numeric_keys, 0, 2, true)); // preserves keys 
  echo '</pre>';

  echo '<pre>';
  print_r($chars); // the original array didn't be affected
  echo '</pre>';

  $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  echo '<pre>';
  print_r(array_splice($nums, 2, 3)); // removes these elements from the array
  print_r($nums); // the original array affected by the splice
  echo '</pre>';

  echo '<pre>';
  print_r(array_splice($nums, 2, 3, ["One", "Two"])); // replaces the elements by the array passed
  print_r($nums);
  echo '</pre>';
	