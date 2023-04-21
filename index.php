`<?php
// Session
session_start();
ob_start();
// Data
require 'data/users.php';
// Function
require 'lib/url.php';
require 'lib/data.php';
require 'lib/user.php';

// Check cookie
if (isset($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

if (!is_login() && $_GET['page'] != 'login')
    redirect_to('?page=login');

$page = empty($_GET['page']) ? 'home' : $_GET['page'];
$path = "pages/{$page}.php";

if (file_exists($path)) require $path;
else require 'inc/404.php';


