<?php
setcookie(
    "usuari",
    "admin",
    time() + 3600,
    "/",
    "",
    false,
    true // HttpOnly
);
echo $_COOKIE['usuari'] ?? '';

