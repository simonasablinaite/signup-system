<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $username = $_POST["username"];
   $pwd = $_POST["pwd"];
   $email = $_POST["email"];

   try {

      require_once 'dbh.inc.php';
      require_once 'signup_model.inc.php';
      require_once 'signup_view.inc.php';
      require_once 'signup_contr.inc.php';

      // Klaidu tvarkykles:
      $errors = [];

      if (is_input_empty($username, $pwd, $email)) {
         $errors["empty_input"] = "Užpildykite visus laukelius!";
      }
      if (is_email_invalid($email)) {
         $errors["invalid_email"] = "Naudojate neegzistuojantį el. paštą!";
      }
      if (is_username_taken($pdo, $username)) {
         $errors["username_taken"] = "Naudotojo vardas jau užimtas!";
      }
      if (is_email_registered($pdo, $email)) {
         $errors["email_used"] = "Vartotojas tokiu el. paštu jau registruotas!";
      }

      require_once 'config_session.inc.php';

      if ($errors) {
         $_SESSION["errors_signup"] = $errors;

         $signupData = [
            "username" => $username,
            "email" => $email
         ];
         $_SESSION["signup_data"] = $signupData;

         header("Location: ../index.php");
         die();
      }

      create_user($pdo, $pwd, $username, $email);

      header("Location: ../index.php?signup=success");

      $pdo = null;
      $stmt = null;

      die();
   } catch (PDOException $e) {
      die("Query failed: " . $e->getMessage());
   }
} else {
   header("Location: ../index.php");
   die();
}
