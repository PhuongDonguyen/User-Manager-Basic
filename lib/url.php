<?php

function get_header()
{
    $header_path = 'inc/header.php';
    if (file_exists($header_path)) {
        require "$header_path";
    } else {
        echo "{$header_path} doesn't exist";
    }
}

function get_footer()
{
    $footer_path = 'inc/footer.php';
    if (file_exists($footer_path)) {
        require "$footer_path";
    } else {
        echo "{$footer_path} doesn't exist";
    }
}

function redirect_to($location)
{
    if (!empty($location)) header("Location: $location");
}

function is_login() {
    return isset($_SESSION['is_login']);
}