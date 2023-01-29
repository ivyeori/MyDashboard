<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) {
  setcookie("PHPSESSID", "", time() - 3600, "/");
  session_destroy();
  header("Location: ../");
  exit;
}

// (C) REDIRECT TO LOGIN PAGE IF NOT SIGNED IN
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}