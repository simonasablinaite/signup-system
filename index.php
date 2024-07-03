<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sygn system</title>

   <link rel="stylesheet" href="./css/main.css">
</head>

<body>
   <h1>SignUp</h1>

   <form action="" method="POST">
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