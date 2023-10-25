<?php

echo $password = "12345678";

echo md5($password)."<br>";
echo sha1($password)."<br>";
echo password_hash($password, PASSWORD_DEFAULT);

$hash = '$2y$10$YJzFRzepfKXd9QtHIoHHGey.aAJDLnjqTWMHfD2oCkh.I8olIu24K';

if (password_verify($password, $hash)) {
    echo 'password correcto';
} else {
    echo 'password incorrecto';
}

