<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "( )" in the arithmetic operation Has A Greater Precedence Than Other Arithmetic Operators
    - "*" and "/" Has A Greater Precedence Than "+" and "-" 
    - "||" Has A Greater Precedence Than "or"
    - "&&" Has A Greater Precedence Than "and"
  */

  echo 2 + 4 * 5; // 22 not 30
  echo '<br>';
  echo (2 + 4) * 5; // 30
  echo '<br>';

  echo 10 || false || [] || "" || 0; // True
  echo '<br>';
  echo 10 or false or ([] || "") or 0; // True
  echo '<br>';

  $a = 10 || false; // $a = (10 || false) => $a = True
  echo $a; // 1
  echo '<br>';
  
  $b = 10 or false; // ($b = 10) or ($b = false) => $b = 10 
  echo $b; // 10
  echo '<br>';
  
  $x = 10 and false; // ($x = 10) and false => $x = 10
  echo $x; // 10
  echo '<br>';
  
  $z = 10 && false; // $z = (10 && false) => $z = false
  var_dump($z); // false