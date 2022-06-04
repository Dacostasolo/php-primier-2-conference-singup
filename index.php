<?php
$css_style = "./css/default.css";
$title = "home";
$def_header = "Registration form for It conference";
$nav = "./pages/registered.php";
$index = "index.php";
require_once("includes/header.php");
require_once("db/db.php");
if(isset($_GET['delId'])){
    $crud->deleteRow("attendee",$_GET['delId']);
}
?>

<div class="row align-items-center justify-content-center main-container">
    <div class="card semi-container">
        <div class="card-body">
            <h3 class="card-title">Sign up form for conference</h3>
            <form method="post" action="./pages/success.php">
                <div class="mb-3">
                    <label for="user-name-f" class="form-label">First Name</label>
                    <input type="text" name="firstName" id="f_name" class="form-control">
                    <label for="user-name-l" class="form-label">Last Name</label>
                    <input type="text" name="lastName" id="l_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="date-birth" class="form-label">Select birth date</label>
                    <input type="text" id="datepicker" name="birthDate" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Define Your Email</label>
                    <input type="email" name="emailAddress" id="u-email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleDataList" class="form-label">Select Specialty</label>
                    <select class="form-select" name="specialty" id="specialty">
                        <option value="">Select Specialty</option>
                        <?php foreach ($crud->readFromTable("specialty") as $key => $value) { ?>
                            <option value="<?php echo $value["specialty_id"] ?>"><?php echo $value["name"] ?></option>
                        <?php } ?>
                    </select>


                </div>
                <div class="mb-3">
                    <label for="u-contact" class="form-label">Add Contact</label>
                    <input type="tel" name="contact" id="u-contact" class="form-control">
                </div>
                <!-- <div class="mb-3">
                    <label for="u-confirm-password" class="form-label">Choose Password</label>
                    <input type="password" name="pass" id="u-c-pass" class="form-control">
                </div> -->
                <div class="mb-3">
                    <input type="submit" value="Create" class="form-control btn btn-primary" name="submit">
                </div>
            </form>
        </div>

    </div>
</div>
<?php $script = "./scripts/default.js";
require_once("includes/footer.php"); ?>
<!-- <h1> hello world</h1> -->