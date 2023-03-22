<?php
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $users = json_decode(file_get_contents('users.json'), true);
  if (!is_array($users)) {
    $users = [];
  }

  $user = array('name'=>$name,'username' => $username, 'email' => $email, 'password' => $password);
  array_push($users, $user);
  file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

  header('Location: login.php');
?>
