<?php

  /*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To A Variable PHP Will Look For A Function With That Name
    
    - Function Exists
    --- function_exists("Func Name")
  */

  function one()
  {
    echo "This Is The One Function";
  }

  one();

  $func1 = "one";
  $func1(); // returns the output of the 'one' function above

  echo '<br>';

  function say_hello($person) {
    echo "Hello, $person";
  }

  $func2 = "say_hello";

  $func2("Ahmed"); // echo: Hello, Ahmed

  echo '<br>';

  function testing() {
    return "Testing From Function";
  }

  // searching for a function called testing
  if (function_exists("testing")) { 
    testing();
  } else {
    echo "Function Not Found!";
  }

  echo '<br>';

  // echo strlen("Ahmed"); // 5

  $func3 = "strlen"; // built-in function

  echo $func3("Elzero"); // 5