<?php

  /*
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */

  // prints all except "USA" and "GER"
  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country === "USA") break;
    echo "$country<br>";

  }

  // prints all except "USA"
  foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country === "USA") continue;

    echo "$country<br>";
  }