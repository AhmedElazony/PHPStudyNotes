<?php

  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  echo abs(10) . "<br>";
  echo abs(0) . "<br>";
  echo abs(-20) . "<br>";

  echo rand() . "<br>";
  echo mt_getrandmax() . "<br>";
  echo rand(50, 60) . "<br>";

  echo 10 / 5 . "<br>";
  echo gettype(10 / 5) . "<br>";

  echo 11 / 5 . "<br>";
  echo gettype(11 / 5) . "<br>";

  echo intdiv(11, 5) . "<br>";
  echo gettype(intdiv(11, 5)) . "<br>";

  echo 11.5 % 5 . "<br>";
  echo gettype(11 % 5) . "<br>";

  echo fmod(11.5, 5) . "<br>";
  echo gettype(fmod(11.5, 5)) . "<br>";

  // =-------------------------------------------------------------------------------=
  
  /*
  Math Functions
  
  - ceil(Number[Required])
  --- Round Up To Integer
  
  - floor(Number[Required])
  --- Round Down To Integer
  */
  
  // -1 -2 -3 -4 -5 -6
  // 1  2  3  4  5  6
  
  echo ceil(5.99) . "<br>";
  echo ceil(5.49) . "<br>";
  echo ceil(5.10) . "<br>";
  echo ceil(5.01) . "<br>";
  echo ceil(-5.99) . "<br>"; // -5
  
  echo floor(5.99) . "<br>";
  echo floor(5.49) . "<br>";
  echo floor(5.10) . "<br>";
  echo floor(5.01) . "<br>";
  echo floor(-5.99) . "<br>"; // -6


  // =-------------------------------------------------------------------------------=
  
  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */

  echo round(5.99) . "<br>";
  echo round(5.50) . "<br>";
  echo round(5.49) . "<br>";
  echo round(5.10) . "<br>";

  echo round(5.99, 1) . "<br>"; // 6
  echo round(5.94, 1) . "<br>"; // 5.9
  echo round(5.995, 2) . "<br>"; // 6
  echo round(5.994, 1) . "<br>"; // 6
  echo round(5.994, 2) . "<br>"; // 5.99

  echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
  echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

  echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
  echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";

  // =-------------------------------------------------------------------------------=
  
  /*
    Math Functions

    - sqrt(Number[Required])
    --- Square Root

    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value
  */

  echo sqrt(16) . "<br>"; // 4
  echo sqrt(25) . "<br>"; // 5
  echo sqrt(100) . "<br>"; // 10

  echo min(10, 20, -40, -30, 50) . "<br>"; // -40
  echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

  echo "<pre>";
  print_r(min([1, 3, 5], [1, 2, 6]));
  echo "</pre>";

  echo max(10, 20, -40, -30, 50) . "<br>"; // 50
  echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

  echo "<pre>";
  print_r(max([1, 3, 5], [1, 2, 6]));
  echo "</pre>";
  
  // =-------------------------------------------------------------------------------=