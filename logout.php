<?php
session_start();

session_destroy();

setcookie("langue", "", time() - 3600, "/", "", false, true);

header("Location: login.php");
exit();