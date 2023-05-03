```php
<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$check_in_date = mysqli_real_escape_string($conn, $_POST['check-in-date']);
$check_out_date = mysqli_real_escape_string($conn, $_POST['check-out-date']);
$adults = mysqli_real_escape_string($conn, $_POST['adults']);
$children = mysqli_real_escape_string($conn, $_POST['children']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Insert data into database
$sql = "INSERT INTO reservations (check_in_date, check_out_date, adults, children, name, email, phone, message)
		VALUES ('$check_in_date', '$check_out_date', '$adults', '$children', '$name', '$email', '$phone', '$message')";

if (mysqli_query($conn, $sql)) {
	echo "Reservation successful!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
```