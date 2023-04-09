<?php

/*
    Function
    - Introduction And DRY (Don't Repeat Yourself) Concept
    - Parameter
    - Argument

    Optional Return & Null
    - End After Return
  */

  $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];


  function get_number($num1, $num2) {
    return $num1 + $num2;
  }

  echo $prizes[get_number(1, 3)];

  function get_number2($num1, $num2) {
    echo $num1 + $num2;
  }

  $prizes_num = get_number2(2, 1); // function will echo the result and return NULL

// =------------------------------------------------------------------

/*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

  function get_data($country = "Egypt", $name = "Ahmed", $age = 19, $address = "Cairo First Floor") {
    $line1 = "Your Country is $country And Your Name is $name <br>";
    $line2 = "Your Age is $age And Your Address is $address<br>";
    return $line1 . $line2;
  }

  echo get_data(); // return the default values

  echo get_data(name: "Omar", age: 20); // changes only the name and age