<?php

declare(strict_types=1); // nustatome, kad dokumente bus griezto tipo duomenys

function signup_inputs()
{

   if (isset($_SESSION["signup-data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
      echo '<input type="text" name="username" placeholder="Usernane" value="' . $_SESSION["signup_data"]["username"] . '">
';
   } else {
      echo '<input type="text" name="username" placeholder="Usernane">';
   }
   echo '<input type="password" name="pwd" placeholder="Password">
';

   if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
      echo '<input type="text" name="email" placeholder="E-mail" value="' . $_SESSION["signup-data"]["email"] . '">
   ';
   } else {
      echo '<input type="text" name="email" placeholder="E-mail">
      ';
   }
}

function check_signup_errors()
{
   if (isset($_SESSION['errors_signup'])) {
      $errors = $_SESSION['errors_signup'];

      echo "<br>";

      foreach ($errors as $error) {
         echo '<p class="form-error">' . $error . '</p>';
      }

      unset($_SESSION['errors_signup']);
   } else if (isset($_GET["signup"]) && $_GET["signup"] === "succes") {
      echo '<br>';
      echo '<p class="form-sucess">Prisijungta sėkmingai!</p>';
   }
}
