<?php

  /*
    Control Structure
    - Switch
  */

  $day = "Sat";

  Switch($day) {
    case "Sat":
      echo "Hello, Today is $day We Are Open From 12 To 15";
      break;
    case "Sun":
    case "Mon":
      echo "Hello, Today is $day We Are Open From 07 To 13";
      break;
    case "Tue":
      echo "Hello, Today is $day We Are Open From 08 To 16";
      break;
    default:
      echo "Unknown Day";
  }