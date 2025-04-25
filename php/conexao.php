<?php
$servername = "sql211.infinityfree.com";
$username = "if0_38803181";
$password = "tripago321";
$database = "if0_38803181_tripagodb";


$conn = new mysqli($servername, $username, $password, $database);


$conn->set_charset("utf8mb4");


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {

}
?>
