<?php

  /*
    Cookies

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */

  setcookie("style", "dark", time() + 60 * 60 * 24 * 30);
  setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
  setcookie("popup", "done", strtotime("+1 month"));

  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";

  echo $_COOKIE["style"];

  // =---------------------------------------------------------=

  /*
    Cookies
    - Modify
    - Delete
    - Add Array
  */

  setcookie("style[color]", "red");
  setcookie("style[font]", "Tahoma");
  setcookie("style[layout]", "boxed");

  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";

  if (isset($_COOKIE["style"])) {
    echo $_COOKIE["style"]["font"];
  }

  // =----------------------------------------------------------=

  /*
    Cookies
    - Practice
  */

  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }

?>

<form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>


