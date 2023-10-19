<?php require_once "../connect.php";



// Get updated user details from form
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

// Update user details in database
$sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', phonenumber='$phonenumber' WHERE id=$id";

if ($connection->query($sql) === TRUE) {
    echo "User details updated successfully";
} else {
    echo "Error updating user details: " . $connection->error;
}

// Close database connection
$connection->close();

?>
