<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';

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
   <h1>Login</h1>

   <form action="">
      <input type="text" name="username" placeholder="Usernane">
      <input type="password" name="pwd" placeholder="Password">
      <button>Login</button>
   </form>


   <h1>SignUp</h1>

   <form action="./includes/signup.inc.php" method="POST">
      <input type="text" name="username" placeholder="Usernane">
      <input type="password" name="pwd" placeholder="Password">
      <input type="text" name="email" placeholder="E-mail">
      <button>SignUp</button>
   </form>

   <?php
   check_signup_errors();
   ?>
</body>

</html>