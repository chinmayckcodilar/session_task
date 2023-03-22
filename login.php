<?php
session_start();


if(isset($_SESSION['loggedIn'])) {
  header('Location: homepage.php');
  exit;
}

$error = isset($_GET['error']) ? $_GET['error'] : null;
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      form{
        display: flex;
        flex-wrap: wrap;
        /* align-items: center; */
        /* justify-content: center; */
        margin-top: 20%;
        margin-left:40%;
        flex-direction: column;
        width:20%;
      }
      body{
            background-image: url("https://as2.ftcdn.net/v2/jpg/01/19/11/55/1000_F_119115529_mEnw3lGpLdlDkfLgRcVSbFRuVl6sMDty.jpg");
            background-repeat: no-repeat;
            background-size: 100% 900px;
            color:aliceblue;


        }
        form{
            display: flex;
            flex-direction: column;
            width: 30%;
            margin-top: 10%;
            margin-left: 30%;
        }
        h1{
            margin-left: 35%;
        }

        input{
            height: 20px;
            border-radius: 4px;
        }

        label{
            font-family: sans-serif;
            font-size: large;
        }

        input[type="submit"]{
            height: 30px;
            border-radius: 15px;
        }
    </style>
    <title>Login Page</title>
  </head>
  <body>
    <?php if ($error) { ?>
      <p style="color:red;">Invalid username or password</p>
    <?php } ?>
    <form method="post" action="authenticate.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>

      <input type="submit" value="Submit"><br>
    </form>
  </body>
</html>
