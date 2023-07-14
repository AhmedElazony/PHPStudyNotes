<?php

// destroy session
$_SESSION = [];
session_destroy();

//destroy cookies.
setcookie('PHPSESSID', '', time() - 5000);

header('location: /');
exit();