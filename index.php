<?php
$mysqli = new mysqli("db", "user", "password", "mydatabase");

if ($mysqli->connect_error) {
    die("Conexiune eșuată: " . $mysqli->connect_error);
}
echo "Conexiune reușită la baza de date! ";
?>
