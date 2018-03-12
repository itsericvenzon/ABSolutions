<?php

session_unset();

$hash = '$2y$12$VD3vCfuHcxU0zcgDvArQSOlQmPv3tXW0TWoteV4QvBYL66khev0oq';

if (password_verify('$password', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}



?>