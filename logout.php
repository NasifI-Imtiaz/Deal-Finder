<?php

session_start();

unset($_SESSION["user_id"]);

unset($_SESSION["first_name"]);

header("location:index.php");

?>