<?php

if (isset($_POST['loginBtn'])) {
    $error = array();

    // Check empty username
    if (empty($_POST['username']))
        $error['username'] = "Input username";
    else $username = $_POST['username'];

    // Check empty password
    if (empty($_POST['password']))
        $error['password'] = "Input password";
    else $password = $_POST['password'];

    // Check validation
    if (empty($error)) {
        if (check_login($username, $password)) {
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $username, time() + 3600);
            }
            $_SESSION['user_login'] = $username;
            $_SESSION['is_login'] = true;
            redirect_to('?page=home');
        } else $error['invalid'] = "Invalid username or password";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
        <h1 class="loginHeader">Login</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php if (isset($username)) echo $username ?>">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php if (isset($password)) echo $password ?>">
        <label for="remember_me"><input type="checkbox" name="remember_me" id="remember_me" value="true"> Remember me</label>
        <?php if (!empty($error['username'])) echo "<p class='error'>{$error['username']}</p>" ?>
        <?php if (!empty($error['password'])) echo "<p class='error'>{$error['password']}</p>" ?>
        <?php if (!empty($error['invalid'])) echo "<p class='error'>{$error['invalid']}</p>" ?>
        <input type="submit" name="loginBtn">
    </form>
</div>
</body>
</html>