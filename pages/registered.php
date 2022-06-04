<?php
$css_style = "../css/default.css";
$title = "All Participants ";
$def_header = "participants in the It conference";
$nav = "../pages/registered.php";
$index = "../index.php";
include_once("../includes/header.php");
require_once("../db/db.php");
?>

<div class="justify-content-center align-item-center">
    <table class="table">
        <tr class="card-success text-center ">
            <th>Profile</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Specialty</th>
            <th>View</th>

        </tr>
        <?php foreach ($crud->getAttendees() as $key => $value) { ?>

            <tr class="text-center fs-4">
                <td>
                    <div class="profile profile-image"><?php echo strtoupper(substr($value["firstName"], 0, 1) . substr($value["lastName"], 0, 1)) ?></div>

                </td>
                <td>
                    <div class="profile"><?php echo ucfirst($value["firstName"]) ?></div>
                </td>
                <td>
                    <div class="profile"> <?php echo ucfirst($value["lastName"]) ?></div>
                </td>

                <td>
                    <div class="profile">
                        <?php echo $value['name'] ?>
                    </div>
                </td>
                <td>
                    <a href='view_details.php?id=<?php echo $value["attendee_id"] ?>' class="btn btn-success">View</a>
                </td>
            </tr>
        <?php } ?>
    </table>


</div>




<?php $script = "../scripts/default.js";
require_once("../includes/footer.php"); ?>