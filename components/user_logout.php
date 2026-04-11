<?php

include './connect.php';

session_start();
session_unset();
session_destroy();

header('location:/Full-working-e-commerce-website-main/home.php');

?>