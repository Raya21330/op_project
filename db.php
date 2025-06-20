<?php
$host = 'db';
$user = 'root';
$pass = 'root';
$db   = 'php_demo';

sleep(5); // <--- добави това, за да изчака MySQL

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
