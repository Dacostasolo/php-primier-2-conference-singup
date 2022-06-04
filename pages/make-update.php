
<?php
$css_style = "../css/default.css";
$title = "Update";
$def_header = "Update page";
$nav = "registered.php";
$index = "../index.php";
require_once("../includes/header.php");
require_once("../db/db.php");
require_once("../includes/dialog.php");
?>


<?php require_once("../includes/form.php");
if (isset($_GET["udtId"])) {
    $value = $crud->getOneAttendee($_GET["udtId"]);

    form($value['firstName'], $value['lastName'], $value['emailAddress'], $value['contact'], $value['birthDate'], $value['specialty_id'],$value['attendee_id'] ,"update.php", $crud);
} else {
    echo card("Error", "Page no found", "bg-danger");
}
?>


<?php $script = "../scripts/default.js";
require_once("../includes/footer.php"); ?>