<?php
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $users = json_decode(file_get_contents('users.json'), true);
  foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
      $_SESSION['loggedIn'] = true;
      $_SESSION['email'] = $user['email'];
      $_SESSION['uname'] = $user['username'];
      $_SESSION['name'] = $user['name'];
      header('Location: homepage.php');
      exit;
    }
  }

  header('Location: login.php?error=1');
  exit;
?>
