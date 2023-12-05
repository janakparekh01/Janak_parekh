<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookings";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
//connected to database and created a variable connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $checkInDate = $_POST['checkInDate'];
    $checkOutDate = $_POST['checkOutDate'];
    $bookingType = $_POST['bookingType'];

    // Check if room is available based on the booking type and date range
    $query = "SELECT available rooms WHERE check_in_date <= '$checkInDate' AND check_out_date >= '$checkOutDate'";
    $result = mysqli_query($connection, $query);

        // Insert the booking details into the database
        $query = "INSERT INTO bookings (full_name, check_in_date, check_out_date, booking_type) VALUES ('$fullName', '$checkInDate', '$checkOutDate', '$bookingType')";
        mysqli_query($connection, $query);

        echo "Room booked successfully!";
   
}

?>
