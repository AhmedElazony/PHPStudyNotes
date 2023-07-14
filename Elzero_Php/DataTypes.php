<?php
   /*
   ============================================
   = Data Types
   = ----------
   = bool  => Boolean
   = int   => Integer
   = float => Floating Point Number | double
   = string
   = array
   = Other Types
   = gettype() // built-in function returns the type of data you pass to it.
   ============================================
   */
   echo gettype(True);
   echo '<br>';
   echo gettype(false);
   echo '<br>';
   echo gettype(100);
   echo '<br>';
   echo gettype(-23);
   echo '<br>';
   echo gettype(-70.6);
   echo '<br>';
   echo gettype("Ahmed");
   echo '<br>';
   echo gettype('Ahmed');
   echo '<br>';
   echo gettype(ARRAY("eg" => "Egypt", "ksa" => "Saudi Arabia")); // => KeyValuePair array
   echo '<br>';
   echo gettype(ARRAY("Egypt", "Saudi Arabia")); // this is an array
   echo '<br>';
   echo gettype(["Egypt", "Saudi Arabia"]); // this is an array
?>

<?php
/*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */

  echo 1 + "2"; // returns 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer (The returned value has been conversed)
  echo '<br>';
  echo True; // returns 1
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo 2 + True; // 3
  echo '<br>';
  echo 10 + 5.5; // 25.5
  echo '<br>';
  echo gettype(10 + 5.5); // double => Float
  echo '<br>';
  echo 10 + '5 lessons'; // 10 with Warning 'Non-numerical Value encountered'
  echo '<br>';
  echo gettype(10 + '5 lessons'); // Integer with Warning 'Non-numerical Value encountered'
  echo '<br>';

?>

<?php

  /*
  ============================================
  = Data Types
  = ----------
  = Type Casting
  = ----------------------
  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "array"
  = "object"
  = "null"
  = ------
  = Search For Settype
  ============================================
  */

  echo 1 + (int) "2 lessons"; // it removes the non-numerical value and returns 3
  echo '<br>';
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo 10 + (int) 15.5; // 25
  echo '<br>';
  echo 10.5 + 10.5; // 21 (not integer)
  echo '<br>';
  echo gettype(10.5 + 10.5); // double
  echo '<br>';
  echo (int) 10.5 + (int) 10.5; // 20 (integer)
  echo '<br>';
  echo (int) 10.5 + 10.5; // 20.5 (double)
  echo '<br>';
  echo (int) (10.5 + 10.5); // 21 (Integer)
  echo '<br>';
  echo gettype((int) (10.5 + 10.5));
  echo '<br>';
  echo (gettype((int) 10.5 + (int) 10.5)); // integer
?>

<?php

  /*
  ============================================
  = Data Types
  = ----------
  Boolean + Converting To Boolean
  ============================================
  */

  /* var_dump() built-in function returns detailed information
	 about data you bass to it
  it doesn't need echo to print in the page, it prints itself. */

  var_dump((bool) ""); // empty string means false in casting to bool
  echo '<br>';
  var_dump((bool) "Ahmed"); // true
  echo '<br>';
  var_dump((bool) []); // empty array // false
  echo '<br>';
  var_dump((bool) [1, 3, 5]); // true
  echo '<br>';
  var_dump((bool) "0"); // false (it converts the string to int '0')
  echo '<br>';
  var_dump((bool) 0); // false
  echo '<br>';
  var_dump((bool) array(1)); // true
  echo '<br>';
  var_dump((bool) -100); // true
  echo '<br>';
  var_dump((bool) 20.3); // true
  echo '<br>';
?>

