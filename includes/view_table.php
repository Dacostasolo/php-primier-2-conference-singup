<?php function viewTable($fname, $lname, $mail, $contact, $birthDate, $specialty)
{ ?>
    <table class="table table-hover">
        <tr>
            <td>first name</td>
            <td> <?php echo $fname ?> </td>
        </tr>
        <tr>
            <td>Last name</td>
            <td> <?php echo $lname ?> </td>
        </tr>
        <tr>
            <td>email</td>
            <td> <?php echo $mail ?> </td>
        </tr>
        <tr>
            <td>contact </td>
            <td> <?php echo $contact ?> </td>
        </tr>
        <tr>
            <td>birth date</td>
            <td> <?php echo $birthDate ?> </td>
        </tr>
        <tr>
            <td>specialty</td>
            <td>
                <?php echo $specialty ?>
            </td>
        </tr>

    </table>
<?php } ?>