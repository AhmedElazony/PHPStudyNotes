<?php

  /*
    Control Structure
    - Loop

    For Loop
    - Expression One Run Once At The First Of The Loop
    - In The Beginning Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Is Executed
  */

  for ($i = 0; $i <= 5; $i++) {

    echo "$i<br>";

  }

  $index = 0;
  for (;;) {

    if ($index > 5) break;

    echo "$index<br>";

    $index++;

  }