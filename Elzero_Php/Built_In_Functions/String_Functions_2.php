<?php

  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */


  // parses the string and divides it into the $query array
  parse_str("name=ahmed&email=ae@ss.s&age=19&os=win", $query);

  echo '<pre>';
  print_r($query);
  echo '</pre>';
  
  echo $query['name'];
  echo '<br>';
  echo $query['email'];
  echo '<br>';
  echo $query['os'];
  echo '<br>';
  
  
  echo "Hello, []  * + . <br>"; // returns Hello, []  * + .
  
  // skips the special chars in the string
  echo quotemeta("Hello, []  * + . <br>"); // returns Hello, \[\] \* \+ \.
  
  
  // str_pad() increases the string with a padding 
  echo str_pad(string: "1", length: 7, pad_string: 0);
  echo '<br>';
  echo str_pad("12", 7, 0);
  echo '<br>';
  echo str_pad("123", 7, 0);
  echo '<br>';
  echo str_pad("1234", 7, 0);
  echo '<br>';
  echo str_pad("12345", 7, 0);
  echo '<br>';
  ECHO "============<BR>";
  echo str_pad(string: "1", length: 7, pad_string: 0, pad_type: STR_PAD_BOTH);
  echo '<br>';
  echo str_pad("12", 7, 0, STR_PAD_BOTH);
  echo '<br>';
  echo str_pad("123", 7, 0, STR_PAD_LEFT);
  echo '<br>';
  echo str_pad("1234", 7, 0, STR_PAD_RIGHT);
  echo '<br>';
  echo str_pad("12345", 7, 0, STR_PAD_RIGHT);
  echo '<br>';

  
  // strtr() => string translate, replaces a substring with another in the original string
  echo strtr(string: "E@zero Web Schoo@", from: "@", to: "l"); // returns Elzero Web School

  echo "<br>";

  $translations = ["@" => "l", "#" => "o"];
  echo strtr("E@zer# Web Sch##@", $translations);

  // =-----------------------------------------------------------------------------------

  /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- It's Case-Sensitive

    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- It's Case-Insensitive
  */

  echo str_replace("@", "o", "Elzer@ Web Sch@@l", count: $r); // Elzero Web School
  echo '<br>';
  echo "Replaces Count Is $r"; // 3
  echo '<br>';
  
  echo str_replace("@", "A", "Elzer@ Web Sch@@l"); // ElzerA Web SchAAl
  echo '<br>';
  
  echo str_replace(["@", "#"], ["l", "o"], "E@zer# Web Sch##@"); // Elzero Web School
  echo '<br>';
  
  echo '<pre>';
  print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two"], 1, ["One", "Two", "Three", "One", "One"])); // replaces "One" And "Two" with 1
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"])); // replaces "One" And "Two" with 1, 2, and "Three" with empty (" ")
  echo '</pre>';
  

  // Case-Insensitive
  echo '<pre>';
  print_r(str_ireplace("one", 1, ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

	//=----------------------------------------------------------------------

  /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

  echo substr_replace("OneTwo", 1, 0); // returns 1
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2); // returns On2
  echo '<br>';
  echo substr_replace("OneTwo", 1, -1); // returns OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 0, 3); // returns 1Two
  echo '<br>';
  echo substr_replace("OneTwo", 2, -3, 3); // returns One2
  echo '<br>';
  echo substr_replace("OneTwo", 1, 2, 2); // returns On1wo
  echo '<br>';
  echo substr_replace("OneTwo", 2, 1, 4); // returns O2o
  echo '<br>';
  
  echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7); // Elzero_A
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "@", 1, 0); // Inserts @ at index of 1 => E@lzero_Web_School

  // =---------------------------------------------------------------------------

  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  $string = "Welcome To The World, My Man, How Are You? Very_Very_Very_Long";

  ECHO wordwrap($string, 7, "<br>"); // doesn't cut the long word
  echo '<br>';
  ECHO wordwrap($string, 7, "<br>", True); // cuts the long word

  echo '<br>';

  echo ord('a'); // returns the ascii code of the 'a' char => 97
  echo '<br>';
  echo ord(10); // casts the int(8) to string('8') => returns 49
  echo '<br>';
  echo ord('10'); // returns 49 also

  echo '<br>';

  echo chr(97); // returns the char of the ascii code => 'a'
  echo '<br>';

  echo similar_text("Hello", "Hello"); // 5 similar characters
  echo '<br>';
  echo similar_text("hello", "Hello"); // 4
  echo '<br>';
  echo similar_text("hel_lo", "hello"); // 5
  echo '<br>';
  echo similar_text("Hello", "helloo", $percent); // stores the percent of similarity in the $percent variable
  echo $percent;
	
	// =-------------------------------------------------------------

  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  echo strstr("Elzero Web School", "W"); // searches for the "W" and returns whats after it. // Web School
  echo '<br>';
  echo strstr("Elzero Web School", "o", True); // searches for the "o" and returns whats before it. // Elzer
  echo '<br>';
  echo strchr("Elzero Web School", "S"); // the same function of strstr // School
  echo '<br>';

  echo stristr("Elzero Web School", "w"); // the same function but it's => Case-Insensitive
  echo '<br>';

  echo 100_000_000; // Syntactic Sugar for numbers // returns => 100000000
  echo '<br>';

  echo number_format(100000000.453245); // returns 100,000,000
  echo '<br>';
  echo number_format(100000000.453245, 3); // returns 100,000,000.453
  echo '<br>';
  echo number_format(100000000.453245, 3, "@"); // returns 100,000,000@453
  echo '<br>';
  echo number_format(100000000.453245, 3, "@", "#"); // returns 100#000#000@453
	
	