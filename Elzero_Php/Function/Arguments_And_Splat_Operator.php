<?php

/*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax || Splat Operator (...$array)
  */

  function calculate(...$nums) {
    // echo "Num of Arguments: " . func_num_args() . "<br>";
    // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
    // print_r(func_get_args());
    
    // $result = 0;
    // foreach (func_get_args() as $arg) {
    //   $result += $arg;
    // }
    // echo "<br>";
    // echo "Result is $result";

    $result = 0;
    foreach ($nums as $num) {
      $result += $num;
    }
    echo $result;
  }

  calculate(20, 35, 50, 43, 89);

  // =-----------------------------------------------------------------


/*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator (...$params)
  */

  function get_data($name, $country = "Private", ...$skills) {
    echo "Hello, $name Your Country Is $country <br>";

    foreach ($skills as $skill) :
      echo "-- $skill<br>";
    endforeach;
  }

  $group_of_skills = ["HTML", "CSS", "JS", "PHP"];

  get_data("Ahmed", "Egypt", ...$group_of_skills); // this is called Unpacking
  get_data("Ahmed", "Egypt", ...["HTML", "CSS", "JS", "PHP"]); // this is the same as the above line