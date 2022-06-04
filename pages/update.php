<?php
require_once("../db/db.php");
require_once("../includes/dialog.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $mail = $_POST['emailAddress'];
        $contact = $_POST['contact'];
        $birthDate = $_POST['birthDate'];
        $specialty_id = $_POST['specialty'];
        $id = $_POST['attendee_udt_id'];


        $crud->updateRow('attendee', $id, ['firstName' => ucfirst($fname), 'lastName' => ucfirst($lname), 'emailAddress' => $mail, 'contact' => $contact, 'birthDate' => $birthDate, 'specialty_id' => $specialty_id]);

        header("Location: registered.php");
    } else {
        echo card("Error", "Page no found", "card-danger");
    }
}
