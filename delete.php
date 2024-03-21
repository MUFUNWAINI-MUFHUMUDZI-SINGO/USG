<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or handle unauthorized access
    header("Location: Login.php");
    exit();
}

// Database credentials
$servername = "localhost"; // Change this to your database server address
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "USG"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if booking ID and activity type are provided
if (isset($_GET['booking_id']) && isset($_GET['activity_type'])) {
    // Retrieve booking ID and activity type from the URL
    $booking_id = $_GET['booking_id'];
    $activity_type = $_GET['activity_type'];
    
    // Sanitize the input to prevent SQL injection
    $booking_id = mysqli_real_escape_string($conn, $booking_id);
    $activity_type = mysqli_real_escape_string($conn, $activity_type);
    
     // Set the appropriate table name based on the activity type
switch($activity_type) {
    case "Yoga":
        $table_name = "Yoga";
        break;
    case "Cardio":
        $table_name = "Cardio";
        break;
    case "Boxing":
        $table_name = "Boxing";
        break;
    case "Volleyball":
        $table_name = "Volleyball";
        break;
    case "Aerobics":
        $table_name = "Aerobics";
        break;
    case "GroupFit":
        $table_name = "GroupFit";
        break;
    case "Karate":
        $table_name = "Karate";
        break;
    default:
        // Handle invalid activity type
        echo "Invalid activity type";
        exit();
}

  


    
    // Prepare SQL statement to delete booking
    $stmt = $conn->prepare("DELETE FROM $table_name WHERE booking_id = ?");
    $stmt->bind_param("i", $booking_id);
    
    // Execute SQL statement
    if ($stmt->execute()) {
        // Redirect back to the profile page after successful deletion
        header("Location: profile.php");
        exit();
    } else {
        // Handle deletion error
        echo "Error deleting booking: " . $conn->error;
    }
    
    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

   