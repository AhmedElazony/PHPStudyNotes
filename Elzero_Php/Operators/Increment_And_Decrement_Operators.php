<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Increment And Decrement Operators
    - Increase And Decrease Values
  */

  $likes = 0;
  $likes++;
  $likes++;
  $likes--;

  echo $likes; // 2
  echo '<br>';

  // Post Increment And Pre Increment
  $a = 0;

  echo $a++; // 0
  echo '<br>';
  echo $a; // 1

  $b = 0;
  
  echo ++$b; // 1
  echo '<br>';
  echo $b; // 1

  // and so on in Pre Decrement And Post Decrement