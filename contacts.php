<?php include('core/init.php'); ?>

<?php

// Create DB Object
$db = new Database;

// Run Query
$db->query('SELECT * FROM contacts');

// Assign Result Set
$contacts = $db->resultset();


?>

<div class="buttons">
    <input type="submit" name="export" value="Export to XML" class="exp-btn float-end mb-5 ms-2">
    <input type="submit" name="export" value="Export to JSON" class="exp-btn float-end mb-5">
</div>

<table class="table table-striped">
    <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Street</th>
            <th scope="col">Zip Code</th>
            <th scope="col">City</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contacts as $contact) : ?>
            <tr>
                <th scope="row"><?php echo $contact->id ?></th>
                <td><?php echo $contact->first_name ?></td>
                <td><?php echo $contact->last_name ?></td>
                <td><?php echo $contact->email ?></td>
                <td><?php echo $contact->street ?></td>
                <td><?php echo $contact->zipcode ?></td>
                <td><?php echo $contact->city ?></td>
                <td>
                    <a href="" class="btn btn-success action-link" data-reveal-id="<?php echo $contact->id; ?>" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                    <a href="#" class="btn btn-danger action-link">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">
                    Edit Contact
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="new-form">
                    <div class="row mx-auto">
                        <div class="form-group col-6">
                            <input type="text" name="first-name" class="form-control" id="" placeholder="Enter First Name" value="<?php echo $contact->first_name ?>" />
                        </div>

                        <div class="form-group col-6">
                            <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Enter Last Name" value="<?php echo $contact->last_name ?>" />
                        </div>
                    </div>

                    <div class="row mx-auto">
                        <div class="form-group col-6">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="<?php echo $contact->email ?>" />
                        </div>

                        <div class="form-group col-6">
                            <input type="text" name="street" class="form-control" id="street" placeholder="Enter Street Name" value="<?php echo $contact->street ?>" />
                        </div>
                    </div>

                    <div class="row mx-auto">
                        <div class="form-group col-6">
                            <input type="text" name="zip-code" class="form-control" id="zip-code" placeholder="Enter Zip Code" value="<?php echo $contact->zipcode ?>" />
                        </div>

                        <div class="form-group col-6">
                            <select name="city" id="city" class="form-control">
                                <option value="" selected>Choose City</option>
                                <?php foreach ($cities as $key => $value) : ?>
                                    <?php if ($key == $contact->city) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = "";
                                    }
                                    ?>
                                    <option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                    <input type="submit" name="submit" value="Update" class="btn btn-success form-control" />
                </form>
            </div>
            <div class="modal-footer float-start">
            </div>
        </div>
    </div>
</div>