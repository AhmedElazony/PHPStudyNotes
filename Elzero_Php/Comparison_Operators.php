<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical
    - !==   => Not Identical

    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]
  */

  // Test Equal
  var_dump(100 == 100); // true
  echo '<br>';
  var_dump(100 == "100"); // true also :0 (it compares the value only)
  echo '<br>';
  var_dump(100.0 == "100"); // true
  echo '<br>';
  var_dump(100.0 != "100"); // false
  echo '<br>';
  var_dump(100.0 <> "100"); // false (that is also [not equal operator] )
  echo '<br>';

  // Test Identical
  var_dump(100 === 100); // true
  echo '<br>';
  var_dump(100 === "100"); // false :) (this compares the value and the type)
  echo '<br>';
  var_dump(100 !== "100"); // true :)
  echo '<br>';
  var_dump(100.0 !== 100); // true
  echo '<br>';
  
  
  // Larger And Smaller Than
  var_dump(100 > 50); // true
  echo '<br>';
  var_dump(100 >= 100); // true
  echo '<br>';

  var_dump(100 < 50); // false
  echo '<br>';
  var_dump(100 <= 50); // false
  echo '<br>';


  // Spaceship Operator (returns -1 if Smaller Than, and 0 if Equal, and 1 if Larger Than)
  var_dump(100 <=> 50); // -1
  echo '<br>';
  var_dump(100 <=> 100); // 0
  echo '<br>';
  var_dump(100 <=> 110); // 1
  
