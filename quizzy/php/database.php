<?php

$usr = "root";
$ser = "localhost";
$pas = "";
$db = "db_quizzy";

$conn = new mysqli($ser, $usr, $pas, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
