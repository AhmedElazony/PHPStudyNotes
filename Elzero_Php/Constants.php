<?php

  /*
    Constants
      - Value Can't be changed during the execution
      - Always Uppercase (for best Practice)
  */

  define("DB_NAME", "Ahmed");
  define("MAIN_NUMBER", 85);

  echo DB_NAME;
  ECHO MAIN_NUMBER * 5;

  // =----------------------------------------------------------

/*
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone
  */

  echo PHP_VERSION;
  echo '<br>';
  echo php_uname(); // returns the os version of the server
  echo '<br>';
  echo __LINE__; // prints the line of the statement (29)
  echo '<br>';
  echo __FILE__; // prints the path of this file 
  echo '<br>';
  echo __DIR__; // prints the path of the directory
  echo '<br>';

  // Syntax Error => Reserved Keyword
  // function clone()
  // {
  //   return "clone";
  // }