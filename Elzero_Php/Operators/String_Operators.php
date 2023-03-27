<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenates Strings

    - ( . )
    - ( .= )
  */

  define("ELAZONY", "1");
  $a = "Ahmed";
  $b = "Wael";
  $c = "Elazony";

  echo $a . " " . $b . " " . $c; // concatenates string variables
  echo '<br>';

  echo "$a $b $c " . ELAZONY; // concatenates string with a constant
  echo '<br>';


  $x = "Ahemd ";
  $x .= "Wael"; // $x = $x . "Wael";
  $x .= " Elazony"; // $x = $x . " Elazony";

  echo $x; // "Ahmed Wael Elazony"
  echo '<br>';