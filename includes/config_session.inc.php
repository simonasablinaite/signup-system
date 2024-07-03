<?php
// ini failo keli pakeitimai:
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// Keletas slapuko parametru:
session_set_cookie_params([
   'lifetime' => 1800,
   'domain' => 'localhost',
   'path' => '/',
   'secure' => true,
   'httponly' => true
]);

session_start();

// slapuko ID atnaujinimas kas 30 min:
if (!isset($_SESSION["last_regeneration"])) {
   regenerate_session_id();
} else {
   $interval = 60 * 30;
   if (time() - $_SESSION["last_regeneration"] >= $interval) {
      regenerate_session_id();
   }
}

// funkcija sesijos ID generavimui:
function regenerate_session_id()
{
   session_regenerate_id();
   $_SESSION["last_regeneration"] = time();
}
