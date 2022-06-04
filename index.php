<?php
$css_style = "./css/default.css";
$title = "home";
$def_header = "Registration form for It conference";
$nav = "./pages/registered.php";
$index = "index.php";
require_once("includes/header.php");
require_once("db/db.php");
if (isset($_GET['delId'])) {
    echo $_GET['delId'];
    $crud->deleteRow("attendee", $_GET['delId']);
}
?>

<?php
require_once("includes/form.php");
form("", "", "", "", "", null, null, "./pages/success.php", $crud);
?>

<?php $script = "./scripts/default.js";
require_once("includes/footer.php"); ?>
<!-- <h1> hello world</h1> -->