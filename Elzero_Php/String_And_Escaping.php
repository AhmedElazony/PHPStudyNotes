<?php

  /*
  ============================================
  = Data Types
  = ----------
  String and Escaping
  = ----------
  nl2br() // new line to <br>
  ============================================
  */

  echo 'Hello PHP';
  echo '<br>';
  echo 'Hello "PHP"'; // prints Hello "PHP" with no errors
  echo '<br>';
  echo "Hello 'PHP'"; // prints Hello 'PHP' with no errors
  echo '<br>';
  echo 'Hello \'PHP\''; // (Escaping) // prints Hello 'PHP' with no errors
  echo '<br>';
  echo 'Hello \\PHP'; // prints Hello \PHP
  echo '<br>';
  echo 'Hello PHP
  On Multiple
  Lines'; // prints it in the same line
  echo '<br>';
  echo nl2br('Hello PHP
  On Multiple
  Lines'); // prints it in multiple lines
?>

<?php

  /*
  ============================================
  = Data Types
  = ----------
  = String and Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  ============================================
  */

  $name = "Ahmed";

  // Heredoc  double quotes
  echo <<<"Here"
  Hello PHP
  Special Chars $$$$ ''' "" \\\\ /* only return  two back slashes */
  Hello, My Name is $name
  Here;

  echo '<br>';

  // Nowdoc   single quotes
  echo <<<'Now'
  Hello PHP
  special Chars $$$$ ''' "" \\\\ /* return all back slashes */
  Hello, My Name is $name
  Now;

  echo '<ul>';
  echo '<li>' . $name . '</li>';
  echo '<li>' . $name . '</li>';
  echo '<li>' . $name . '</li>';
  echo '</ul>';

  echo <<<"ulLinks"
  <ul>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
  </ul>
  ulLinks;

?>