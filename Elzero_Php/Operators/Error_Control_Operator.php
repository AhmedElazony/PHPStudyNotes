<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    ( @ ) // Works With:
    - Variable
    - File
    - Include
  */

  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found!");
  //echo $b;
  echo '<br>';

  // File
  $file = @file("hello.txt") or die("File Not Found!");
  echo '<pre>';
  print_r($file);
  echo '</pre>';

  // Include
  (@Include("hellos.php")) or die ("The File You Want To Include Not Found!");