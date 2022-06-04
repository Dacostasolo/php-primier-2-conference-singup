<?php function form($firstName = "", $lastName = "", $email = "", $contact = "", $birthDate = "",  $specialty_id = null, $attendee_id = null, $action, $crud)
{ ?>
    <div class="row align-items-center justify-content-center main-container">
        <div class="card semi-container">
            <div class="card-body">
                <h3 class="card-title">Sign up form for conference</h3>
                <form method="post" action="<?php echo $action ?>">
                    <div style="display: none;">
                        <input type="text" name="attendee_udt_id" value="<?php echo $attendee_id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="user-name-f" class="form-label">First Name</label>
                        <input type="text" name="firstName" id="f_name" class="form-control" value="<?php echo $firstName ?>">
                        <label for="user-name-l" class="form-label">Last Name</label>
                        <input type="text" name="lastName" id="l_name" class="form-control" value="<?php echo $lastName ?>">
                    </div>
                    <div class="mb-3">
                        <label for="date-birth" class="form-label">Select birth date</label>
                        <input type="text" id="datepicker" name="birthDate" class="form-control" value="<?php echo $birthDate ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Define Your Email</label>
                        <input type="email" name="emailAddress" id="u-email" class="form-control" value="<?php echo $email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Select Specialty</label>
                        <select class="form-select" name="specialty" id="specialty">
                            <?php
                            if ($specialty_id == null) echo "<option value=''>Select Specialty</option> ";
                            foreach ($crud->readFromTable("specialty") as $key => $value) { ?>
                                <option value="<?php echo $value['specialty_id']; ?>" <?php if ($value['specialty_id'] == $specialty_id) echo "selected" ?>>
                                    <?php echo $value["name"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="u-contact" class="form-label">Add Contact</label>
                        <input type="tel" name="contact" id="u-contact" class="form-control" value="<?php echo $contact ?>">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Save Changes" class="form-control btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php } ?>