<?php
define("USERNAME", "admin");
define("PASSWORD", "1234");

echo "Enter username: ";
$input_username = readline();

echo "Enter password: ";
$input_password = readline();

if ($input_username === USERNAME && $input_password === PASSWORD) {
    echo "Login successful!\n";
} else {
    echo "Login failed! Incorrect username or password.\n";
}
?>
