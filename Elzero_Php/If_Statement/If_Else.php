<?php

  /*
    Control Structure
    If, Elseif, Else <= Real Life Example
  */

  $page = "Home";

  // if
  if ($page == "About") {

    echo 'This is The About Page.';

  }

  echo '<br>';

  // if, else
  $title = "";

  if ($title == "") {

    echo "Unknown Page!";

  } else {

    echo $title;

  }

  // if, elseif, else
  $lang = "Arabic";
  
  if ($lang == "Arabic") {

    echo "مرحبا";
    // load the Arabic transcript

  } elseif ($lang == "English") {

    echo "Hello";
    // load the English transcript
    
  } else {

    echo "Unknown Language!";

  }

// =------------------------------------

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if ($_POST['lang'] == 'ar') {

      header("Location: ar.php"); // load the script in ar.php page
      exit();

    } elseif ($_POST['lang'] == 'en') {

      header("Location: en.php");
      exit();

    } else {

      header("Location: sp.php");
      exit();
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Demo</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="username" id="">
      <select name="lang">
        <option value="ar">Arabic</option>
        <option value="en">English</option>
        <option value="sp">Spanish</option>
      </select>
      <input type="submit" value="Go">
    </form>
  </body>
</html>
