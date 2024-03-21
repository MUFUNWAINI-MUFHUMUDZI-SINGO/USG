

<style>
    body {
      background-image: url('img/background.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    
    form {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      max-width: 100%;
      margin-right: auto;
      margin-left: 70px;
    }

    h2 {
      margin-top: 0;
      text-align: center;
      color: #333;
    }

    .input-field {
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    .input-field input {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #322e2e;
      outline: none;
    }

    .input-field img {
      margin-right: 10px;
      height: 20px;
    }

    .input-field label {
      color: #777;
      font-size: 16px;
      font-weight: bold;
    }

    .btn-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .btn-container button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 5px; /* Adjust margin between buttons */
    }

    .btn-login {
      background-color: #4CAF50;
      color: white;
    }

    .btn-cancel {
      background-color: #f44336;
      color: white;
    }

    .error-message {
      color: red;
      text-align: center;
    }
  </style>
 <?php
session_start(); // Start session for storing user login state

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "USG");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user data
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password correct, set session variables
            $_SESSION['user_id'] = $row['id']; // Assuming 'id' is the user ID column in your database
            // Redirect to booking.php
            header("Location: booking.php");
            exit();
        } else {
            // Password incorrect
            $error_message = "<span style='color: red;'>Invalid username or password</span>";
        }
    } else {
        // User not found
        $error_message = "<span style='color: red;'>User not found</span>";
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
 
  <form action="" method="post">
  <h2>Account created successfully<br>Please login</h2>
    <br>
    <br>
    <br>
    <br>
  <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
  <div class="input-field">
      <label for="username">
        <img src="img/icons8-username-24.png" alt="Username Icon"> Student Email:
      </label>
      <input type="text" id="username" name="username" placeholder="Example 21000423@mvula.univen.ac.za" required>
    </div>
    <div class="input-field">
      <label for="password">
        <img src="img/icons8-password-24.png" alt="Password Icon"> Password:
      </label>
      <input type="password" id="password" name="password" placeholder="Enter Password" required>
    </div>
    <div class="btn-container">
      <button type="submit" class="btn-login">Login</button>
     <button type="button" class="btn-cancel" onclick="goToIndex()">Cancel</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="signup-text">Don't have an account? <a href="Signup.php" class="signup-link">Click here to sign up</a></div>
  </form>
</body>
<script>
      function goToIndex() {
      window.location.href = "index.php";
    }
  </script>



</html>
