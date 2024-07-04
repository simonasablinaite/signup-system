<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup system</title>

   <link rel="stylesheet" href="./css/main.css">
   <link rel="stylesheet" href="./css/reset.css">
</head>

<body>

   <h3>
      <?php
      output_username()
      ?>
   </h3>

   <?php
   if (!isset($_SESSION["user_id"])) { ?>
      <h1>Login</h1>

      <form action="./includes/login.inc.php" method="post">
         <input type="text" name="username" placeholder="Usernane">
         <input type="password" name="pwd" placeholder="Password">
         <button>Login</button>
      </form>
   <?php } ?>
   <?php
   check_login_errors();

   ?>

   <h1>SignUp</h1>

   <form action="./includes/signup.inc.php" method="POST">
      <?php
      signup_inputs();
      ?>
      <button>SignUp</button>
   </form>

   <?php
   check_signup_errors();
   ?>

   <h1>Logout</h1>

   <form action="">
      <button>Logout</button>
   </form>
</body>

</html>