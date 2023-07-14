<?php

  /*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */

  function add_five($number) {
    return $number += 5;
  }

  $n = 15;
  echo add_five($n); // 20
  echo $n; // 15 :( because by default it passed by value

  function add_4(&$number) {
    return $number += 4;
  }

  $a = 14;
  echo add_4($a); // 18
  echo $a; // 18 too. because it is passed by reference

	// return type Declaration
  function add($number1, $number2) : int {
    return $number1 + $number2;
  }

  echo gettype(add(9.5, 4.5)); // 15 int