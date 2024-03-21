
<style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E5E4E2;
        } 

        .navbar {
            /* Your navbar styles here */
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh; /* Adjust to center vertically */
         /* Set background color */
        }

        .profile-info {
            text-align: center;
            margin-top: 20px; /* Adjust spacing */
        }

        .profile-picture {
            position: relative;
            width: 200px; /* Adjust width and height as needed */
            height: 200px;
            margin-bottom: 20px; /* Adjust spacing */
        }

        .profile-picture img {
            border-radius: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: blue;
            border-radius: 50%;
        }

        .default-profile {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            width: 50%; /* Adjust size of default profile picture */
            height: auto;
        }
        .booking-container {
    background-color: #f9f9f9; /* Light gray background */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
    margin: 20px; /* Increased margin for spacing */
    padding: 20px; /* Adequate padding */
    width: calc(40.40% - 40px); /* Adjusted width to accommodate increased margin */
    float: left;
    box-sizing: border-box;
    transition: transform 0.3s ease; /* Smooth transition on hover */
}

.booking-container:hover {
    transform: translateY(-5px); /* Lift container slightly on hover */
}

/* Clear floating elements to start new rows */
.clear {
    clear: both;
}

        

.menu {
           list-style-type: none;
           margin: 0;
           padding: 0;
           display: flex;
           align-items: center;
       }

       .menu li {
           margin-right: 20px;
       }

       .menu li a {
           color: white;
           text-decoration: none;
           font-weight: bold;
       }

       .menu li a:hover {
           color: #FFD700;
       }

       .navbar red li a:hover{
           color:#FFD700;
       }

       .content {
           padding: 40px;
           text-align: center;
           color: #002232;
       }

       .footer {
           background-color: #002232;
           color: #fff;
           padding: 20px 0;
           text-align: center;
       }

       .footer ul {
           list-style-type: none;
           padding: 0;
       }

       .footer ul li {
           display: inline;
           margin-right: 10px;
       }

       .footer ul li:before {
           content: "|";
           margin-right: 10px;
       }

       .footer ul li:first-child:before {
           content: "";
           margin-right: 0;
       }



</style>
<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or handle unauthorized access
    header("Location: Login.php");
    exit();
}

// Database credentials
$servername = "localhost"; // Change this to your database server address
$username = "root"; // Leave this empty if no username is set
$password = ""; // Leave this empty if no password is set
$dbname = "USG"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information from the database using the logged-in user's ID
$user_id = $_SESSION['user_id'];

// Prepare and execute SQL query
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();
    $username = $row["username"];
    $fullname = $row["fullname"];
    $residence = $row["residence"];
    $picture_filename = $row["picture_path"]; // Assuming the column name is "picture_path"
    
    // Construct the absolute path to the image
    $picture_path = "C:/xampp/htdocs/UNI Stud Gym/uploads/" . $picture_filename;
} else {
    // Handle case where user does not exist
    echo "User not found";
    exit(); // Stop script execution
}


// Retrieve user information from the database using the logged-in user's ID
$user_id = $_SESSION['user_id'];

// Array to store table names
$tables = array("Yoga", "Cardio", "Boxing", "Volleyball", "Aerobics", "GroupFit", "Karate");

// Array to store booking data
$bookings = array();

// Retrieve bookings for each table
foreach ($tables as $table) {
    // Prepare and execute SQL query to retrieve bookings for the current table
    $sql = "SELECT date, time_slot FROM $table WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Store the bookings in the array
    $bookings[$table] = $result->fetch_all(MYSQLI_ASSOC);
    
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>32400012</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="navbar blue">
    <div class="logo">
        <img src="img/download.png" alt="Logo">
    </div>
    <ul class="menu">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li>
            <a href="#">
                <img src="img/HOMM.png" alt="Icon" style="vertical-align: middle; margin-right: 10px;">
                <b style="font-size: 24px;">UNIVEN STUDENT GYM</b>
            </a>
        </li>
    </ul>
</div>

<div class="navbar red">
    <ul class="menu"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="booking.php"><img src="img/book.png" alt="About Us Icon"> BOOK SESSION</a></li>
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="#"><img src="img/icons8-username-24 (1).png" alt="Training Icon"> PROFILE</a></li>
        
        
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <li><a href="logout.php"><img src="img/icons8-logout-24.png" alt="Login Icon"> LOG OUT</a></li>
   
    </ul>
</div>

<br>
<br>


<div class="profile-container">
    <div class="profile-picture">
        <?php if (file_exists($picture_path)) : ?>
            <img src="<?php echo $picture_path; ?>" alt="Profile Picture">
        <?php else : ?>
            <div class="placeholder"></div>
            <img src="img/UNI.jpg" alt="Default Profile Picture" class="default-profile">
        <?php endif; ?>
    </div>

    <div class="profile-info">
        <p><strong>Username:</strong> <?php echo $username; ?></p>
        <p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
        <p><strong>Residence:</strong> <?php echo $residence; ?></p>
    </div>

    <h2>Manage your bookings here</h2>
</div>
        <hr>

        
    <!-- Display bookings -->
    <div class="bookings">
        <?php foreach ($bookings as $table => $booking_data): ?>
            <center><h3 style="color: #0040ff;"><?php echo strtoupper($table); ?> &nbsp;&nbsp;&nbsp;BOOKINGS</h3>
        </center>
            <?php $count = 0; ?>
            <?php foreach ($booking_data as $booking): ?>
                <?php if ($count % 3 == 0): ?>
                    <div class="clear"></div>
                <?php endif; ?>
                <div class="booking-container">
                    <p><strong>Date:</strong> <?php echo $booking['date']; ?></p>
                    <p><strong>Time Slot:</strong> <?php echo $booking['time_slot']; ?></p>
                    <button onclick="confirmDelete()">Delete</button>
                </div>
                <?php $count++; ?>
            <?php endforeach; ?>
            <div class="clear"></div>
        <?php endforeach; ?>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm("Are you sure you want to delete this booking?")) {
            // If confirmed, proceed with deletion
          
            //window.location.href = "delete.php";
            alert("Booking deleted successfully!");
        }
    }
</script>


</body>
</html>



