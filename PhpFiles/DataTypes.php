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
