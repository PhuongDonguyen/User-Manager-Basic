<?php

// Remove cookie
setcookie('user_login', $_POST['username'], time() -3600);
setcookie('is_login', true, time() -3600);
// Unset session
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

redirect_to('?page=home');