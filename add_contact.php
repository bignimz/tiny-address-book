<?php include('core/init.php'); ?>

<?php

// Create DB object
$db = new Database;

// Run Query
$db->query("INSERT INTO `contacts` (first_name, last_name, email, street, zipcode, city) 
                            VALUES(:first_name, :last_name, :email, :street, :zipcode, :city)");

// Bind Form VALUES
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':street', $_POST['street']);
$db->bind(':zipcode', $_POST['zipcode']);
$db->bind(':city', $_POST['city']);

if ($db->execute()) {
    echo "Contact Added Successfully";
} else {
    echo "Could not add contact";
}


?>