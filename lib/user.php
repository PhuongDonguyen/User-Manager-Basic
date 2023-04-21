<?php

function check_login($username, $password)
{
    global $list_users;
    foreach ($list_users as $user) {
        if ($username == $user['username'] && md5($password) == $user['password']) return true;
    }
    return false;
}

function user_login()
{
    if (!empty($_SESSION['user_login'])) return $_SESSION['user_login'];
    else return false;
}

function user_info($username, $field)
{
    global $list_users;
    foreach ($list_users as $user) {
        if ($user['username'] == $username) {
            return $user[$field];
        }
    }
}