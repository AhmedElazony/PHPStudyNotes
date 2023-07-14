<?php

  /*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */

  echo lcfirst("Ahmed Wael Elazony"); // lcfirst => lower case first character
  echo '<br>';
  echo ucfirst("ahmed wael elazony"); // ucfirst => upper case first character
  echo '<br>';
  echo strtolower("AHMED WAEL ELAZONY"); // strtolower => string to lower (All chars)
  echo '<br>';
  echo strtoupper("ahmed wael elazony"); // strtoupper => string to upper (All Chars)
  echo '<br>';
  echo ucwords("ahmed wael elazony"); // ucwords => upper case first letter in all words
  echo '<br>';
  echo ucwords("ahmed wael|elazony", "|"); // will output "Ahmed wael|Elazony" because you determined the separator between words
  echo '<br>';
  echo str_repeat("Ahmed", 3); // str_repeat => string repeat // "AhmedAhmedAhmed"

  // =---------------------------------------------------------------------------------------
  
  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
    */
    
    $names = ["Ahmed", "Mohammed", "Ali", "Omar"];

    echo implode(" | ", $names) . "<br>"; // turns the array into string with separator(optional)
    echo implode("@", $names) . "<br>"; // Ahmed@Mohammed@Ali@Omar

    $str = "Elzero Web School Is Cool";

  echo "<pre>";
  echo print_r(explode(" ", $str)); // turn the string to an array (you determine every item of the array by declaring the separator)
  echo "</pre>";
  
  echo "<pre>";
  echo print_r(explode("W", $str)); // [0] => Elzero, [1] => eb School Is Cool
  echo "</pre>";
  
  echo "<pre>";
  echo print_r(explode(" ", $str, 3)); // 3 => is the limit of the items of the array
  echo "</pre>";
  
  
  echo "<pre>";
  echo print_r(explode(" ", $str, -2)); // -2 => will delete the last to items in the array 
  echo "</pre>";
  
  echo str_shuffle("Ahmed") . "<br>"; // randomizes the string
  echo strrev("Ahmed") . "<br>"; // reverses the string // demhA
  
  echo trim("  Ahmed  ") . "<br>"; // deletes the space character from right and left of the string.
  echo strlen(trim("   Ahmed  ")) . "<br>"; // 5 characters
  
  echo trim("###Ahmed#$$", "$#") . "<br>"; // returns "Ahmed"
  echo trim("Ahme##d", "#"). "<br>"; // returns "Ahme##d"
  
  echo rtrim("#Ahmed##", "#") . "<br>"; // deletes the # char from the right side only
  echo ltrim("#Ahmed##", "#"); // deletes the # char from the left side only
  

  // =---------------------------------------------------------------------------------------
  
  /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
    */
    
    echo chunk_split("Elzero Web School", 3, "-") . "<br>"; // splits the string into chunks of length 3 and "-" between
    
  echo "<pre>";
  echo print_r(str_split("Ahmed is The Best Developer", 3)); // splits the string into array of elements (every 3 chars is element)
  echo "</pre>";

  echo "<pre>";
  echo print_r(str_split("Ahmed is The Best Developer")); // default length is 1
  echo "</pre>";

  echo "<h2>Hello, <b>World</b></h2>";
  echo '<br>';
  
  echo strip_tags("<h3>Hello, <b>World</b></h3>"); // ignores the tags
  echo '<br>';
  
  echo strip_tags("<h3>Hello, <b>World</b></h3>", "<b>"); // ignores the tags except <b>
  echo '<br>';
  
  echo nl2br("Ahmed\nIs\nGood!", false); // false for don't make it xhtml


  // =---------------------------------------------------------------------------------------


  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

  var_dump(strpos("Ahmed Ahmed", "A")); // searches for a substring in the string and returns its position // returns 0
  echo "<br>";
  var_dump(strpos("Ahmed Ahmed", "A", 4)); // starts searching from index 4 // retruns 6
  echo "<br>";
  var_dump(strpos("ahmed Ahmed", "A")); // returns 6
  echo "<br>";
  var_dump(strpos("Ahmed Ahmed", "A", -4)); // starts from the "h"(the second one) char and returns (false)
  echo "<br>";
  var_dump(strpos("Ahmed Ahmed", "A", -5)); // starts from the "A"(the second one) char and returns 6
  echo "<br>";
  var_dump(strpos("Ahmed Ahmed", "A", -11)); // starts from the "A"(the first one) char and returns 0
  echo "<br>";
  
  var_dump(strrpos("Ahmed Ahmed", "A")); // strrpos => string right position, returns the last position of the substring you want in the string
  echo "<br>";
  var_dump(strrpos("Ahmed Ahmed", "A", 5)); // returns 6
  echo "<br>";

  var_dump(stripos("Ahmed Ahmed", "a")); // stripos => string insensitive position. // returns 0
  echo "<br>";
  var_dump(strripos("Ahmed Ahmed", "a")); // strripos => string right insensitive position. // returns 6
  echo "<br>";

  var_dump(substr_count("Ahemd Ahmed", "Ah")); // returns the number of substring duplicates in the string.
  echo "<br>";
  var_dump(substr_count("Ahemd Ahmed", "Ah", 1)); // starts from the index number 1. // returns 1
  echo "<br>";
  var_dump(substr_count("Ahemd Ahmed", "Ah", 1, 7)); // starts from the index number 1 with length of 7 chars(hemd Ah). // returns 1
  echo "<br>";
  var_dump(substr_count("Ahemd Ahmed", "Ah", 1, 6)); // starts from the index number 1 with length of 6 chars(hemd A). // returns 0
  echo "<br>";
  var_dump(substr_count("abcdabcda", "abcda")); // (Overlap String) returns

  // =---------------------------------------------------------------------------------------