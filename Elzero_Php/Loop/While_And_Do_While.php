<?php

  /*
    Control Structure
    - Loop

    - While Loop
  */

  $i = 1;

  while ($i <= 5) {
    
    echo "$i<br>";

    $i++;
  
  }

  // Another Syntax
  while ($i <= 5) :

    echo "$i<br>";
    
    $i++;
  endwhile;

// =---------------------------------------------------------------------------

/*
	Do While Loop
	-> The Block of code will be executed at least one time.
*/

$i = 11;

  do {

    echo "$i<br>";

    $i++;

  } while ($i <= 10);