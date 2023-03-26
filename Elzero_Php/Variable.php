<?php

  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes
  */

  $username = "AhmedElazony";

  echo $username; // prints AhmedElazony
  echo '<br>';
  
  echo $Username = "Ahmed Wael"; // prints Ahmed Wael
  echo '<br>';
  
  echo 'Hello $Username'; // prints Hello $Username
  echo '<br>';
  
  echo "Hello $username"; // prints Hello AhmedElazony

  // =-----------------------------------------------------

  /*
    Variable Variable
    Takes the value of a Variable and treats that as the name of the second Variable.
  */

  $a = 'Ahmed';
  $$a = 'Wael';
  $$$a = 'Elazony';

  echo $a; // prints Ahmed
  echo '<br>';
  echo $$a; // prints Wael
  echo '<br>';
  echo $Ahmed; // prints Wael :)
  echo '<br>';
  echo $$$a; // prints Elazony
  echo '<br>';
  echo $Wael; // prints Elazony :)
  echo '<br>';
  
  echo "Hello $$a"; // prints Hello $Ahmed
  echo '<br>';
  echo "Hello {$$a}"; // prints Hello Wael (The same as $$a)
  echo '<br>';
  echo "Hello {$$$a}"; // prints Hello Elazony (The same as $$$a)
  

  // =--------------------------------------------------------------

  /*
    Assign Variables By Reference
      - By Default Variables Are Assigned By Value
      - Assigned By Reference Make Variables Point to Another
    -------------
    NOTE: References Are Not Pointers
  */

  $a = 'Ahmed';
  $b = $a; // assign by value

  echo $a; // prints Ahmed
  echo '<br>';
  echo $b; // prints Ahmed too
  echo '<br>';
  
  $a = 'Elazony';
  echo $a; // prints Elazony
  echo '<br>';
  echo $b; // prints Ahmed
  echo '<br>';

  $b = &$a; // Assign by Reference

  echo $b; // prints Elazony :0

  // =---------------------------------------------------------

  /*
    Pre-Defined Variables
  */

  echo '<pre>';
  print_r($_SERVER); // pre-defined array for the server stuff 
  echo '</pre>';

  echo $_SERVER["HTTP_CONNECTION"];

  echo $_POST["username"];
  echo '</pre>';

?>

<form action="" method="post">
  <input type="text" name="username">
  <input type="submit" value="send">
</form>




