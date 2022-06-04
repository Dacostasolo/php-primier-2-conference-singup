<?php
$host  = "127.0.0.1";
$db = "attendance_db";
$user = "root";
$pass = "";
$charset = "utf8mb4";
// require_once("../pages/dialog.php");
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    //code...
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $th) {
    // echo card("Error", "Something went wrong", "bg-danger");
    echo "<div style='display:none'>";
    throw new PDOException($th->getMessage());
    echo "</div> ";
}

require_once("crud.php");
$crud = new Crud($pdo);
