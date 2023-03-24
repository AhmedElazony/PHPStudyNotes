<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = -------------------
  = print_r() // built-in function that prints human readable info about the variable you pass.
  ============================================
  */

  echo '<pre>'; // to make it more readable

  print_r([
    0 => "Ali",
    "A" => "Ahmed",
    "M" => "Magda",
    "Mohammed",
    5 => "Omar",
    "Ali",
    "Sameeh",
    3 => "Mageda",
    "Love",
    "Names" => [ // Multi-Dimensional Array
      "Ahmed",
      "Wael",
      "Elazony" => ['1', '2', '3']
      ] 
    
  ]);

  echo '</pre>';