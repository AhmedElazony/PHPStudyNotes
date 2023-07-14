<?php

/*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */

  // Normal Function With Parameter

  function say_hello_to($name) {
    return "Hello, $name";
  }

  echo say_hello_to("Ahmed");

  echo '<br>#########<br>';

  // Anonymous Function In Variable

  $say_hello = function() {
    return "Hello";
  };

  echo $say_hello();

  echo '<br>#########<br>';

  // Anonymous Function With Parameter In Variable

  $say_hi = function($name) {
    return "Hi, $name";
  };

  echo $say_hi("Ahmed");

  echo '<br>#########<br>';

  // Inherit Variable From Parent Scope
  $msg = "Hola!";

  $say_hola = function($name) use ($msg) {
    return "$msg $name";
  };

  echo $say_hola("Ahmed");

  echo '<br>#########<br>';

  // Pass Anonymous Function To Function => array_map()

  $nums = [10, 20, 30, 40, 50, 60];

  $nums_after_adding_five = array_map(function($item) { return $item + 5; }, $nums);
  echo '<pre>';
  print_r($nums_after_adding_five);
  echo '</pre>';

  
  $nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);
  echo '<pre>';
  print_r($nums_after_adding_ten);
  echo '</pre>';