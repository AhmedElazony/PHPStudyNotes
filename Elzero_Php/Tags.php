<?php 
# ↑ this is a starting tag

# ↓ this is the ending tag
?>

// Also you can use more than one tag in the document
<?php


?>

// ======================================================

/* Print and echo */

<?php
echo 'Hello, World';
print 'Hello, My World!';

// also you can use double quotes
echo "Hello, World!";
print "Hello, My World!";

// PHP is not case sensitive
ECHO 'hello, world!';
PRINT 'hello, my world';

// NOTE that you can use HTML tags inside the echo and print statements
echo '<br>';
print 'Hello<br>Hi';
?>

<?='Hello, World';?> // this is called short tag
// --> prints Hello, World (such as 'echo')

/* Comments */
<?php
   // Single Line Comment
   # Single Line Comment
   /* Multi Line Comment */
   /*   ====================
   	== My Special App ==
   	====================
  */

   echo 'Hello' /* Single Line */;

