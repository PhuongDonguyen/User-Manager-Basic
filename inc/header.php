<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1 class="logo">MAIN WEBSITE</h1>
    <div class='user-login'>Welcome
        <div class='user-login__user'><?php echo user_info(user_login(), 'full_name') ?></div>
        <a href='?page=logout' class='logout-btn'> (Exit)</a></div>
    <ul class="nav-list">
        <li class="nav-list__item">
            <a href="?page=home" class="nav-list__item-link nav-list__item-link--home">Home</a>
        </li>
        <li class="nav-list__item">
            <a href="?page=contact" class="nav-list__item-link">Contact</a>
        </li>
        <li class="nav-list__item">
            <a href="?page=news" class="nav-list__item-link">New</a>
        </li>
        <li class="nav-list__item">
            <a href="?page=product" class="nav-list__item-link">Product</a>
        </li>
        <li class="nav-list__item">
            <a href="?page=about" class="nav-list__item-link">About</a>
        </li>
    </ul>
</header>