<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) {
  session_start();
session_destroy();
setcookie("PHPSESSID", "", time() - 3600, "/");
header("Location: ../");
exit();
  

  
}

// (C) REDIRECT TO LOGIN PAGE IF NOT SIGNED IN
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}