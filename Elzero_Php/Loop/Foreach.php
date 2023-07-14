<?php

  /*
    Control Structure
    - Loop

    Foreach
  */

  $countries = ["EG", "SA", "QA", "SY"];

  echo '<pre>';
  print_r($countries);
  echo '</pre>';


  // Syntax: foreach ($array as $value)
  foreach ($countries as $country) {

    echo "$country<br>";

  }

  $countries_with_discount = ["EG" => 30, "SA" => 20, "QA" => 30, "SY" => 60];

  echo '<pre>';
  print_r($countries_with_discount);
  echo '</pre>';

  // Syntax: foreach ($array as $key => $value)
  foreach ($countries_with_discount as $country => $discount) {

    echo "Countrye is $country and Discount is => $discount<br>";

  }