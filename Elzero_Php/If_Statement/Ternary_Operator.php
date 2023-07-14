<?php

/*
	Control Structure
	- Ternary Operator => Short if
*/

// Syntax
# Condition ? True : False;


$a = 10;
  echo $a > 8 ? "Hello" : "Hi";

  echo '<br>';

  echo "I Love PHP Because Its A ";

  if ($a > 8) {

    echo "Good";

  } else {

    echo "Bad";

  }

  echo " Language";

  echo '<br>';

  // =--------

  echo "I Love PHP Because It is A " . ($a > 8 ? "Good" : "Bad") . " Language";