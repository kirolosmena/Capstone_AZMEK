<?php

session_start();
session_destroy();

unset ($_SESSION[`name`]);

//echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
header('Location: ./login.php');

?>