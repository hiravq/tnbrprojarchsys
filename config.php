<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = 'ServBay.dev';
$dbname = 'project_archive';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

function e($str) { return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8'); }
?>