<?php
ini_set('display_errors', 0);
session_set_cookie_params([
    'httponly' => true,
    'secure' => true,
    'samesite' => 'Strict'
]);
session_start();

