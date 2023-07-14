<?php

/*
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations &#038; Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
  */

  // + and -
  echo 14 + 13;
  echo '<br>';
  echo gettype(14 + 14); // integer
  echo '<br>';
  echo 12.5 + 12.5;
  echo '<br>';
  echo gettype(12.5 + 12.5); // double => Float
  echo '<br>';

  echo '<br>';
  echo 13 - 34;
  echo '<br>';
  echo gettype(13 - 34); // integer
  echo '<br>';
  echo 13.3 - 23.4;
  echo '<br>';
  echo gettype(13.3 - 23.4); // double
  echo '<br>';
  
  // * and / 
  echo '<br>';
  echo 23 * 5;
  echo '<br>';
  echo gettype(23 * 5); // integer
  echo '<br>';
  echo -40.6 * 5;
  echo '<br>';
  echo gettype(-40.6 * 5); // integer
  echo '<br>';
  
  echo '<br>';
  echo 23 / 5;
  echo '<br>';
  echo gettype(23 / 5); // double
  echo '<br>';
  
  // % (Mod)
  echo '<br>';
  echo 10 % 2; // 0 (integer)
  echo '<br>';
  echo 11 % 2; // 1 (integer)
  echo '<br>';
  echo 29 %  10; // 9 (integer)
  echo '<br>';
  
  // ** (Exponentiation)
  echo '<br>';
  echo 2 ** 4; // 16 [2.power(4)]
  echo '<br>';
  echo 3 ** 3; // 27
  echo '<br>';
  
  // Identity and Negation
  echo '<br>';
  echo "100";
  echo '<br>';
  echo gettype("100");
  echo '<br>';
  echo +"100"; // Identity (returns the string into number)
  echo '<br>';
  echo gettype(+"100"); // integer
  echo '<br>';
  //echo +"100 tests"; // warning: non-numerical value
  
  echo '<br>';
  echo "-100";
  echo '<br>';
  echo gettype("-100");
  echo '<br>';
  echo -"-100"; // Negation (returns the opposite of the data) // [return 100]
  echo '<br>';
  echo gettype(-"-100");

  /* ===================================================================================== */

  /*
  Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */

  $a = 20;
  // $a = $a + 20;
  $a += 20; // the same as the above

  // $a = $a - 5;
  $a -= 5;

  // $a = $a * 2;
  $a *= 2;

  // $a = $a / 4;
  $a /= 4;

  // $a = $a % 3;
  $a %= 3;

  // $a = $a ** 2;
  $a **= 2;