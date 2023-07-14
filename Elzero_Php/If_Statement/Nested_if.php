<?php

/*
	Control Structure
	- Nested If
*/

  $name = "Ahmed";
  $is_student = true;
  $is_orphan = true;
  $country = "Egypt";
  $country_has_discount = true;
  $price = 100; 
  $country_discount = 50;
  $student_discount = 10;
  $orphan_discount = 15;

  if ($country == $country_has_discount) {

    if ($is_student == true) {

      if ($is_orphan) {

        echo "Hello $name,";
        echo '<br>';
        echo "Course Price is $price\$";
        echo '<br>';
        echo "Country discount is $country_discount";
        echo '<br>';
        echo "Student discount is $student_discount";
        echo '<br>';
        echo "Orphan discount is $orphan_discount";
        echo '<br>';
        echo "Total price is " . $price - ($country_discount + $student_discount + $orphan_discount) . '$';
      } else {
        
        echo "Hello $name,";
        echo '<br>';
        echo "Course Price is $price\$";
        echo '<br>';
        echo "Country discount is $country_discount";
        echo '<br>';
        echo "Student discount is $student_discount";
        echo '<br>';
        echo "Total price is " . $price - ($country_discount + $student_discount) . '$';
        
      }
      
    } else {
      
      if ($is_orphan) {
        
        echo "Hello $name,";
        echo '<br>';
        echo "Course Price is $price\$";
        echo '<br>';
        echo "Country discount is $country_discount";
        echo '<br>';
        echo "Student discount is $orphan_discount";
        echo '<br>';
        echo "Total price is " . $price - ($country_discount + $orphan_discount) . '$';
        
      } else {
        
        echo "Hello $name,";
        echo '<br>';
        echo "Course Price is $price\$";
        echo '<br>';
        echo "Country discount is $country_discount";
        echo '<br>';
        echo "Total price is " . $price - $country_discount . '$';
        
      }
    }
    
  } else {
    
    echo "Hello $name,";
    echo '<br>';
    echo "your Country '$country'";
    echo '<br>';
    echo "Doesn't have any discounts";
    echo '<br>';
    echo "Total Price is $price\$";

  }
