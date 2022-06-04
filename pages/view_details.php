<?php
$css_style = "../css/default.css";
$title = "success";
$def_header = "Success page";
$nav = "../pages/registered.php";
$index = "../index.php";
require_once("../includes/header.php");
require_once("../db/db.php");
require_once("../includes/dialog.php")
?>

<?php if (isset($_GET['id'])) {
    $value = $crud->getOneAttendee($_GET['id']);
?>
    <div class="row justify-content-center align-item-center">
        <div class="profile card semi-container col-2 main">
            <div class="profile profile-image view-profile mt-4">
                <?php echo strtoupper(substr($value['firstName'], 0, 1) . substr($value['lastName'], 0, 1)); ?>
            </div>
            <div class="table-container">
                <?php require_once("../includes/view_table.php");
                viewTable($value['firstName'], $value['lastName'], $value['emailAddress'], $value['contact'], $value['birthDate'], $value['name']);
                ?>
            </div>
            <div class="mb-4">
                <a class="btn btn-success px-5">Edit #</a>
                <a class="btn btn-danger px-5" href="../index.php?delId=<?php echo $_GET['id'] ?>">Remove</a>
            </div>
        </div>
    </div>
<?php } else {
    echo card("Error", "Page no found", "bg-danger");
} ?>

<?php $script = "../scripts/default.js";
require_once("../includes/footer.php"); ?>