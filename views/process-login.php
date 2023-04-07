<?php
// process LOGIN form
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  session_start();

  if ($username == '*****' && $password == '*****') {
    $_SESSION['loggedin'] = true;
    header('Location: admin-page.php');
    exit;
  } else {
    echo "Invalid name or password.";
  }
}
