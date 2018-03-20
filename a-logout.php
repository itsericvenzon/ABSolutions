<?php

session_start();
unset($_SESSION['adusername']);
session_destroy();

header("refresh:5;url=a-login.html");
readfile("spinner.html");

?>