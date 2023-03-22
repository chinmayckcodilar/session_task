<?php

session_start();
if (!isset($_SESSION['loggedIn'])) {
  header('Location: login.php');
  exit;
}

?>


<!DOCTYPE html>
<html>

<head>
  <title>Homepage</title>
  <style>
    body {
      background-image: url("https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg");
      background-repeat: no-repeat;
      background-size: 100% 900px;
      margin-left: 35%;
      margin-top: 5%;
    }
  </style>
</head>

<body onload="showEmail()">
  <h1>Welcome to the homepage!</h1>
  <p id="name"></p>
  <p id="email"></p>
  <p id="uname"></p>
  <form method="post" action="logout.php">
    <input type="submit" value="Logout">
  </form>

  <script>
    function showEmail() {
      <?php session_start(); ?>
      <?php if (isset($_SESSION['email'])) { ?>
        const email = "<?php echo $_SESSION['email']; ?>";
        const name = "<?php echo $_SESSION['name']; ?>";
        const uname = "<?php echo $_SESSION['uname']; ?>";
        document.getElementById("name").innerHTML = `Name: ${name}`;
        document.getElementById("email").innerHTML = `Email: ${email}`;
        document.getElementById("uname").innerHTML = `Username: ${uname}`;

      <?php }

      ?>
    }
  </script>