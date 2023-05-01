<?php

session_start();
echo "Logging you out. Please wait...";
unset($_SESSION["tailorId"]);
unset($_SESSION["Tailorlogin"]);
unset($_SESSION["Tailorusername"]);

// session_unset();
// session_destroy();

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
