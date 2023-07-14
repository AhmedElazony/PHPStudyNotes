<?php

/*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

  */

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

  echo '<pre>';
  print_r(array_chunk($friends, 2)); // chunks the array to multi-dimensional array, each of size 2. 
  echo '</pre>';

  $countries = ['EG' => 'Egypt', 'KSA' => 'Saudi Arabia', 'Sy' => 'Syria', 'Jr' => 'Jordan', "PS" => 'Palestine'];

  echo '<pre>';
  print_r(array_chunk($countries, 2, True)); // will preserve the keys.
  echo '</pre>';

  echo '<pre>';
  print_r(array_change_key_case($countries)); // key will be Lower Case by default.
  echo '</pre>';

  echo '<pre>';
  print_r(array_change_key_case($countries, CASE_UPPER)); // key will be Upper Case.
  echo '</pre>';

  $keys = ['O', 'A', 'S', 'M', 'G'];
  echo '<pre>'; // must be the same length.
  print_r(array_combine($keys, $friends)); // combine the two array into key-indexed array. 
  echo '</pre>';
  
  $counts = ['A', 'B', 'A', 'B', 'C', 'c', 'a', 'b', 'A'];
  echo '<pre>';
  print_r(array_count_values($counts)); // counts the values of each element in the array.
  echo '</pre>';

  // =-------------------------------------------------------------------------------------=
  
  /*
  Array Functions
  
    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements
    
    - array_flip(Array[Required])
    --- Exchange Keys With Its Values
    
    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays
    
    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array
    
    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */

  $names = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Mona" , "Alia"]];

  echo '<pre>';
  print_r($names);
  echo '</pre>';
  
  echo '<pre>';
  print_r(ARRAY_REVERSE($names)); // reverses the array without the index.
  echo '</pre>';
  
  echo '<pre>';
  print_r(array_reverse($names, true)); // reverses the array and the index.
  echo '</pre>';
  
  $countries = ['EG' => 'Egypt', 'KSA' => 'Saudi Arabia', 'Sy' => 'Syria', 'Jr' => 'Jordan', "PS" => 'Palestine'];
  
  echo '<pre>';
  print_r(array_flip($countries)); // flips the key-value pair // ['value' => 'key']
  echo '</pre>';
  
  echo count($names); // 6
  echo '<br>';
  echo count($names, 1); // 8 // counts the multi-dimensional array elements, too.
  echo '<br>';
  
  $searchArray = ["1", 2, 3, 4];

  if (in_array(1, $searchArray)) {
    echo "Found!<br>";
  }

  if (in_array(1, $searchArray, true)) echo "Found!<br>";
  else echo "Not Found!<br>";

  $courses = ["PHP" => 85, "Javascript" => 50, "Python" => 30, "C#" => 100];
  if (array_key_exists("C#", $courses)) {
    print("The C# Course Is Found And The Price is {$courses['C#']}$");
  }
  
  // =-------------------------------------------------------------------------------------=

  /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

  $names = ["Osama", "Ahmed", "Osama", "Mahmoud", "Gamal", 1, "1", ["Osama" , "Alia"]];

  echo '<pre>';
  print_r(array_keys($names)); // stores the keys or indexes into a new array.
  echo '</pre>';
  
  echo '<pre>';
  print_r(array_keys($names, "Osama")); // returns array = [ 0 => 0, 1 => 2]
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($names, "1", True)); // returns [0 => 6]
  echo '</pre>';
  
  $countries = ['EG' => 'Egypt', 'KSA' => 'Saudi Arabia', 'Sy' => 'Syria', 'Jr' => 'Jordan', "PS" => 'Palestine'];

  echo '<pre>';
  print_r(array_keys($countries));
  echo '</pre>';

  echo '<pre>';
  print_r(array_values($countries)); 
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($countries, 10, "Country"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($countries, -10, "Country")); // add the value before the original elements
  echo '</pre>';

  
  echo '<pre>';
  print_r(array_pad($countries, 5, "Country")); // nothing will be added
  echo '</pre>';

  $courses = ["PHP" => 85, "Javascript" => 50, "Python" => 30, "C#" => 100];

  $nums = [85, 50, 30, 100];
  echo array_product($nums); // 12750000
  echo '<br>';
  echo array_product($courses); // 12750000
  echo '<br>';
  
  echo array_sum($nums); // 265
  echo '<br>';
  echo array_sum($courses); // 265

  // =-------------------------------------------------------------------------------------=

  /*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

  */

  $countries = ['EG' => 'Egypt', 'KSA' => 'Saudi Arabia', 'Sy' => 'Syria', 'Jr' => 'Jordan', "PS" => 'Palestine'];

  echo current($countries) . '<br>'; // Egypt
  echo next($countries) . '<br>'; // Saudi Arabia
  echo current($countries) . '<br>'; // Saudi Arabia
  echo next($countries) . '<br>'; // Syria
  echo prev($countries) . '<br>'; // Saudi Arabia
  echo reset($countries) . '<br>'; // Egypt
  echo end($countries) . '<br>'; // Palestine

	// =------------------------------------------------------------------=
