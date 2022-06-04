<?php
$css_style = "../css/default.css";
$title = "success";
$def_header = "Success page";
$nav = "../pages/registered.php";
$index = "../index.php";
require_once("../includes/header.php");
require_once("../db/db.php");
require_once("../includes/dialog.php");
if (isset($_POST['submit'])) {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $mail = $_POST['emailAddress'];
    $contact = $_POST['contact'];
    $birthDate = $_POST['birthDate'];
    $specialty_id = $_POST['specialty'];

    if (($fname && $lname && $mail && $contact && $birthDate && $specialty_id) != null) {
        $isSuccess = $crud->insert('attendee', ['firstName' => ucfirst($fname), 'lastName' => ucfirst($lname), 'emailAddress' => $mail, 'contact' => $contact, 'birthDate' => $birthDate, 'specialty_id' => $specialty_id]);
        if (!$isSuccess)
            echo card("Error", "Something went wrong", "card-danger");
    }
}
?>
<div class="row justify-content-center align-item-center">
    <div class="card semi-container col-2">
        <?php require_once("../includes/view_table.php");
        $specialty = $crud->readSpecificValue("specialty", $specialty_id)['name'];
        viewTable($fname, $lname, $mail, $contact, $birthDate, $specialty);
        ?>

    </div>
    <div class="col-2 column">
        <div class="card semi-container card-success">
            <h1 class="fs-2 fw-normal lh-lg text-center text-capitalize"><?php echo "Welcome " . $_POST['firstName'] . " " . $_POST['lastName']  ?></h1>
        </div>
        <div class="card semi-container text-center def-padding">
            <p>
            <h4 class="fw-normal lh-sm "> you have successfully registered for the conference</h4>
            </p>
        </div>
        <a class="btn btn-success semi-container fs-3" href="registered.php">See All Who Have Registered</a>
    </div>
</div>

<?php $script = "../scripts/default.js";
require_once("../includes/footer.php"); ?>